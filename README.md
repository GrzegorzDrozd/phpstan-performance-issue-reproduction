# Performance issue reproducible code

In this repository I will try to reproduce a performance issue that I found in my project.

Please take a look at 2 files: index_good.php and index_bad.php

The only difference between them is line 4 where I create the "$list" variable or not.
Yet running phpstan on index_bad.php takes 1.88 seconds while index_good.php takes 0.3 seconds.
                             
```shell
php -dxdebug.mode=off -f vendor/bin/phpstan -- analyse --level 2 --debug -vvv src/index_bad.php
```
```shell
Result cache not used because of debug mode.
/home/grzegorz/work/phpstan-issue/src/index_bad.php
--- consumed 16 MB, total 64 MB, took 1.51 s
Result cache was not saved because only files were passed as analysed paths.


 [OK] No errors


PHP runtime version: 8.2.29
PHP version for analysis: 8.2.29 (from runtime)

PHPStan version: 2.1.x-dev@6818997
PHPStan running from:
phpstan/bin/phpstan

Extension installer: Not installed

Discovered Composer project root:
/home/grzegorz/work/phpstan-issue

Parallel processing scheduler:
# of detected CPU cores:   16
# of analysed files:       1
# of jobs:                 1
# of spawned processes:    1

Elapsed time: 1.88 seconds
Used memory: 64 MB
```
```shell
php -dxdebug.mode=off -f vendor/bin/phpstan -- analyse --level 2 --debug -vvv src/index_good.php
```
```shell
Result cache not used because of debug mode.
/home/grzegorz/work/phpstan-issue/src/index_good.php
--- consumed 18 MB, total 44 MB, took 0.20 s
Result cache was not saved because only files were passed as analysed paths.


 [OK] No errors


PHP runtime version: 8.2.29
PHP version for analysis: 8.2.29 (from runtime)

PHPStan version: 2.1.x-dev@6818997
PHPStan running from:
phpstan/bin/phpstan

Extension installer: Not installed

Discovered Composer project root:
/home/grzegorz/work/phpstan-issue

Parallel processing scheduler:
# of detected CPU cores:   16
# of analysed files:       1
# of jobs:                 1
# of spawned processes:    1

Elapsed time: 0.31 seconds
Used memory: 44 MB
grzegorz@kratos:~/work/phpstan-issue$
```

To emphasize:
```shell
Elapsed time: 0.31 seconds
```
vs
```shell
Elapsed time: 1.88 seconds
```
For my real project the difference is even bigger: 8s vs ... 20+ minutes to analyze a single file in pre-commit hook.  

Code in my project is much more complex, and I cannot share it, but the issue is the same: I have a long list of closures, and if I define an array on top of the file, it takes 20+ minutes to run phpstan. If I remove that array initialization, it runs in 8 seconds.

## More detailed strory about the issue

In my project we don't use a full symfony framework. We use a lot of components. One of the components that we don't use is a service locator and its compiler pass. That is why we add items to a Console component manually. Until now our code looked like this:

```php
$application->add(new FooCommand(
    $container->get(Dependency1::class),
    $container->get(Dependency2::class),
    $container->get(Dependency3::class),
));
```
That was not efficient because all commands were created upfront even when not used.
We decided to do some refactoring and use FactoryCommandLoader that accepts an array where key is a command and value is a closure to create that command. 

Finally, our code looked like this:
```php
$list = [];

$list['foo:command'] = static function () :Command {
    return new FooCommand(
        $container->get(Dependency1::class),
        $container->get(Dependency2::class),
        $container->get(Dependency3::class),
    );
};
// and so on for 460+ commands
```
And this basic change made phpstan to run in 20+ minutes instead of the previous 8 seconds. 
                                          
I have tried to use `ContainerCommandLoader` and that also worked fine but that adds 460 entries into dependency injection container that are used only in this one place.

```php
$list = []

$di->set(FooCommand::class, function (Container $container) : FooCommand {
    return new FooCommand(
        $container->get(Dependency1::class),
        $container->get(Dependency2::class),
        $container->get(Dependency3::class),
    );
});
$list['foo:command'] = FooCommand::class;
// and so on for 460+ commands

```
This has no effect on performance. This is reproduced in file `index_good_container.php` and be seen using this command:
```shell
php -dxdebug.mode=off -f vendor/bin/phpstan -- analyse --level 2 --debug -vvv src/index_good_container.php
```
```shell
Result cache not used because of debug mode.
/home/grzegorz/work/phpstan-issue/src/index_good_container.php
--- consumed 18 MB, total 68 MB, took 0.19 s
Result cache was not saved because only files were passed as analysed paths.


 [OK] No errors


PHP runtime version: 8.2.29
PHP version for analysis: 8.2.29 (from runtime)

PHPStan version: 2.1.33
PHPStan running from:
/home/grzegorz/work/phpstan-issue/vendor/phpstan/phpstan

Extension installer: Not installed

Discovered Composer project root:
/home/grzegorz/work/phpstan-issue

Parallel processing scheduler:
# of detected CPU cores:   16
# of analysed files:       1
# of jobs:                 1
# of spawned processes:    1

Elapsed time: 0.39 seconds
Used memory: 68 MB
```


# Steps I investigated

## Rule performance
I modified FileAnalyser.php to gather some statistics about individual rule execution time. I added hrtimer around line 145:
```php
$start = \hrtime(true);
$ruleErrors = $rule->processNode($node, $scope);
print join(';', [$nodeType, $node->getAttribute('startLine', 0), get_class($rule), ((\hrtime(true) - $start) / 1_000_000)]) . "\n";
```
Then when running like this:
```shell
php -f phpstan/bin/phpstan -- analyse --level 0 --debug -vvv src/index_good.php 2>&1 > good
```
```shell
php -f phpstan/bin/phpstan -- analyse --level 0 --debug -vvv src/index_bad.php 2>&1 > bad
```
I generated two files with execution times. I wrote a small analyse script to measure differences, but I could not find any significant difference.

## Disabling individual rules
I tried to disable individual rules in phpstan.neon, but I could not find any rule that would cause the issue.

## Different levels
I tried to run phpstan with different levels, starting with 0 ending with 9. I could not find any level that would cause the issue. I also changed all config variables (in main config.neon) to false, to make sure that nothing is enabled. No difference.
                  
## XdebugHelper effect?
I tried to use xdebug profiler to see if there is any difference.
I used these commands to generate profiles (note the significant difference in processing time):
```shell
PHPSTAN_ALLOW_XDEBUG=1 php -dxdebug.mode=profile -dxdebug.output_dir=profiles/bad -dxdebug.profiler_output_name="bad.out" -f phpstan/bin/phpstan -- analyse --level 2 --debug --xdebug -vvv src/index_bad.php
```
```shell
Elapsed time: 29 seconds
Used memory: 60 MB
```
And for good file:
```shell
PHPSTAN_ALLOW_XDEBUG=1 php -dxdebug.mode=profile -dxdebug.output_dir=profiles/good -dxdebug.profiler_output_name="good.out" -f phpstan/bin/phpstan -- analyse --level 2 --debug --xdebug -vvv src/index_good.php
```
```shell
Elapsed time: 2.11 seconds
Used memory: 46 MB

```
The number of calls seems similar. An obvious difference is the processing time. 

## Function tracing
I added the following code to `FileAnalyser.php` in line 101 and then aroudn 320:
```php
$dir = 'bad';
if (str_contains(join(' ',$_SERVER['argv']), 'good')) {
    $dir = 'good';
}
xdebug_start_trace(  '/home/grzegorz/work/phpstan-issue/profiles/'.$dir.'/trace'); try{
if (is_file($file)) {
// ...
// line 320+
		} else {
			$fileErrors[$callbackInvocationNumber][] = (new Error(sprintf('File %s does not exist.', $file), $file, canBeIgnored: false))->withIdentifier('phpstan.path');
		} } finally {
			xdebug_stop_trace();
		}
```
And ran the following commands:
```shell
PHPSTAN_ALLOW_XDEBUG=1 php -dxdebug.mode=trace,debug -dxdebug.use_compression=0 -dxdebug.output_dir=profiles/bad -dxdebug.profiler_output_name="bad.out" -f phpstan/bin/phpstan -- analyse --level 2 --debug --xdebug -vvv src/index_bad.php
```
```shell
Elapsed time: 2 minutes 7 seconds
Used memory: 70 MB
```
```shell
PHPSTAN_ALLOW_XDEBUG=1 php -dxdebug.mode=trace,debug -dxdebug.use_compression=0 -dxdebug.output_dir=profiles/good -dxdebug.profiler_output_name="good.out" -f phpstan/bin/phpstan -- analyse --level 2 --debug --xdebug -vvv src/index_good.php
```
```shell
Elapsed time: 11 seconds
Used memory: 54 MB
```
There is an order of magnitude difference in trace file size. 
```shell 
find profiles -name "*xt*" -exec ls -la {} \;
```
```shell
-rw-rw-r-- 1 grzegorz grzegorz 1788602657 Dec 21 13:24 profiles/good/trace.xt
-rw-rw-r-- 1 grzegorz grzegorz 17940328794 Dec 21 13:23 profiles/bad/trace.xt
```
I tried to check those files, but I could not find any tool to automate that. Line diff shows differences in all lines (timing, and file name ;) ).