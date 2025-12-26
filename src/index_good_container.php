<?php

require_once 'vendor/autoload.php';

$c = new App\DummyContainer();

// Container registrations
$c->set(App\Alpha\AlphaClass1::class, static function (): App\Alpha\AlphaClass1 {
    return new App\Alpha\AlphaClass1();
});
$c->set(App\Alpha\AlphaClass2::class, static function (): App\Alpha\AlphaClass2 {
    return new App\Alpha\AlphaClass2();
});
$c->set(App\Alpha\AlphaClass3::class, static function (): App\Alpha\AlphaClass3 {
    return new App\Alpha\AlphaClass3();
});
$c->set(App\Alpha\AlphaClass4::class, static function (): App\Alpha\AlphaClass4 {
    return new App\Alpha\AlphaClass4();
});
$c->set(App\Alpha\AlphaClass5::class, static function (): App\Alpha\AlphaClass5 {
    return new App\Alpha\AlphaClass5();
});
$c->set(App\Alpha\AlphaClass6::class, static function (): App\Alpha\AlphaClass6 {
    return new App\Alpha\AlphaClass6();
});
$c->set(App\Beta\BetaClass1::class, static function (): App\Beta\BetaClass1 {
    return new App\Beta\BetaClass1();
});
$c->set(App\Beta\BetaClass2::class, static function (): App\Beta\BetaClass2 {
    return new App\Beta\BetaClass2();
});
$c->set(App\Beta\BetaClass3::class, static function (): App\Beta\BetaClass3 {
    return new App\Beta\BetaClass3();
});
$c->set(App\Beta\BetaClass4::class, static function (): App\Beta\BetaClass4 {
    return new App\Beta\BetaClass4();
});
$c->set(App\Beta\BetaClass5::class, static function (): App\Beta\BetaClass5 {
    return new App\Beta\BetaClass5();
});
$c->set(App\Beta\BetaClass6::class, static function (): App\Beta\BetaClass6 {
    return new App\Beta\BetaClass6();
});
$c->set(App\Delta\DeltaClass1::class, static function (): App\Delta\DeltaClass1 {
    return new App\Delta\DeltaClass1();
});
$c->set(App\Delta\DeltaClass2::class, static function (): App\Delta\DeltaClass2 {
    return new App\Delta\DeltaClass2();
});
$c->set(App\Delta\DeltaClass3::class, static function (): App\Delta\DeltaClass3 {
    return new App\Delta\DeltaClass3();
});
$c->set(App\Delta\DeltaClass4::class, static function (): App\Delta\DeltaClass4 {
    return new App\Delta\DeltaClass4();
});
$c->set(App\Delta\DeltaClass5::class, static function (): App\Delta\DeltaClass5 {
    return new App\Delta\DeltaClass5();
});
$c->set(App\Delta\DeltaClass6::class, static function (): App\Delta\DeltaClass6 {
    return new App\Delta\DeltaClass6();
});
$c->set(App\Epsilon\EpsilonClass1::class, static function (): App\Epsilon\EpsilonClass1 {
    return new App\Epsilon\EpsilonClass1();
});
$c->set(App\Epsilon\EpsilonClass2::class, static function (): App\Epsilon\EpsilonClass2 {
    return new App\Epsilon\EpsilonClass2();
});
$c->set(App\Epsilon\EpsilonClass3::class, static function (): App\Epsilon\EpsilonClass3 {
    return new App\Epsilon\EpsilonClass3();
});
$c->set(App\Epsilon\EpsilonClass4::class, static function (): App\Epsilon\EpsilonClass4 {
    return new App\Epsilon\EpsilonClass4();
});
$c->set(App\Epsilon\EpsilonClass5::class, static function (): App\Epsilon\EpsilonClass5 {
    return new App\Epsilon\EpsilonClass5();
});
$c->set(App\Epsilon\EpsilonClass6::class, static function (): App\Epsilon\EpsilonClass6 {
    return new App\Epsilon\EpsilonClass6();
});
$c->set(App\Eta\EtaClass1::class, static function (): App\Eta\EtaClass1 {
    return new App\Eta\EtaClass1();
});
$c->set(App\Eta\EtaClass2::class, static function (): App\Eta\EtaClass2 {
    return new App\Eta\EtaClass2();
});
$c->set(App\Eta\EtaClass3::class, static function (): App\Eta\EtaClass3 {
    return new App\Eta\EtaClass3();
});
$c->set(App\Eta\EtaClass4::class, static function (): App\Eta\EtaClass4 {
    return new App\Eta\EtaClass4();
});
$c->set(App\Eta\EtaClass5::class, static function (): App\Eta\EtaClass5 {
    return new App\Eta\EtaClass5();
});
$c->set(App\Eta\EtaClass6::class, static function (): App\Eta\EtaClass6 {
    return new App\Eta\EtaClass6();
});
$c->set(App\Gamma\GammaClass1::class, static function (): App\Gamma\GammaClass1 {
    return new App\Gamma\GammaClass1();
});
$c->set(App\Gamma\GammaClass2::class, static function (): App\Gamma\GammaClass2 {
    return new App\Gamma\GammaClass2();
});
$c->set(App\Gamma\GammaClass3::class, static function (): App\Gamma\GammaClass3 {
    return new App\Gamma\GammaClass3();
});
$c->set(App\Gamma\GammaClass4::class, static function (): App\Gamma\GammaClass4 {
    return new App\Gamma\GammaClass4();
});
$c->set(App\Gamma\GammaClass5::class, static function (): App\Gamma\GammaClass5 {
    return new App\Gamma\GammaClass5();
});
$c->set(App\Gamma\GammaClass6::class, static function (): App\Gamma\GammaClass6 {
    return new App\Gamma\GammaClass6();
});
$c->set(App\Iota\IotaClass1::class, static function (): App\Iota\IotaClass1 {
    return new App\Iota\IotaClass1();
});
$c->set(App\Iota\IotaClass2::class, static function (): App\Iota\IotaClass2 {
    return new App\Iota\IotaClass2();
});
$c->set(App\Iota\IotaClass3::class, static function (): App\Iota\IotaClass3 {
    return new App\Iota\IotaClass3();
});
$c->set(App\Iota\IotaClass4::class, static function (): App\Iota\IotaClass4 {
    return new App\Iota\IotaClass4();
});
$c->set(App\Iota\IotaClass5::class, static function (): App\Iota\IotaClass5 {
    return new App\Iota\IotaClass5();
});
$c->set(App\Iota\IotaClass6::class, static function (): App\Iota\IotaClass6 {
    return new App\Iota\IotaClass6();
});
$c->set(App\Kappa\KappaClass1::class, static function (): App\Kappa\KappaClass1 {
    return new App\Kappa\KappaClass1();
});
$c->set(App\Kappa\KappaClass2::class, static function (): App\Kappa\KappaClass2 {
    return new App\Kappa\KappaClass2();
});
$c->set(App\Kappa\KappaClass3::class, static function (): App\Kappa\KappaClass3 {
    return new App\Kappa\KappaClass3();
});
$c->set(App\Kappa\KappaClass4::class, static function (): App\Kappa\KappaClass4 {
    return new App\Kappa\KappaClass4();
});
$c->set(App\Kappa\KappaClass5::class, static function (): App\Kappa\KappaClass5 {
    return new App\Kappa\KappaClass5();
});
$c->set(App\Kappa\KappaClass6::class, static function (): App\Kappa\KappaClass6 {
    return new App\Kappa\KappaClass6();
});
$c->set(App\Lambda\LambdaClass1::class, static function (): App\Lambda\LambdaClass1 {
    return new App\Lambda\LambdaClass1();
});
$c->set(App\Lambda\LambdaClass2::class, static function (): App\Lambda\LambdaClass2 {
    return new App\Lambda\LambdaClass2();
});
$c->set(App\Lambda\LambdaClass3::class, static function (): App\Lambda\LambdaClass3 {
    return new App\Lambda\LambdaClass3();
});
$c->set(App\Lambda\LambdaClass4::class, static function (): App\Lambda\LambdaClass4 {
    return new App\Lambda\LambdaClass4();
});
$c->set(App\Lambda\LambdaClass5::class, static function (): App\Lambda\LambdaClass5 {
    return new App\Lambda\LambdaClass5();
});
$c->set(App\Lambda\LambdaClass6::class, static function (): App\Lambda\LambdaClass6 {
    return new App\Lambda\LambdaClass6();
});
$c->set(App\Theta\ThetaClass1::class, static function (): App\Theta\ThetaClass1 {
    return new App\Theta\ThetaClass1();
});
$c->set(App\Theta\ThetaClass2::class, static function (): App\Theta\ThetaClass2 {
    return new App\Theta\ThetaClass2();
});
$c->set(App\Theta\ThetaClass3::class, static function (): App\Theta\ThetaClass3 {
    return new App\Theta\ThetaClass3();
});
$c->set(App\Theta\ThetaClass4::class, static function (): App\Theta\ThetaClass4 {
    return new App\Theta\ThetaClass4();
});
$c->set(App\Theta\ThetaClass5::class, static function (): App\Theta\ThetaClass5 {
    return new App\Theta\ThetaClass5();
});
$c->set(App\Theta\ThetaClass6::class, static function (): App\Theta\ThetaClass6 {
    return new App\Theta\ThetaClass6();
});
$c->set(App\Zeta\ZetaClass1::class, static function (): App\Zeta\ZetaClass1 {
    return new App\Zeta\ZetaClass1();
});
$c->set(App\Zeta\ZetaClass2::class, static function (): App\Zeta\ZetaClass2 {
    return new App\Zeta\ZetaClass2();
});
$c->set(App\Zeta\ZetaClass3::class, static function (): App\Zeta\ZetaClass3 {
    return new App\Zeta\ZetaClass3();
});
$c->set(App\Zeta\ZetaClass4::class, static function (): App\Zeta\ZetaClass4 {
    return new App\Zeta\ZetaClass4();
});
$c->set(App\Zeta\ZetaClass5::class, static function (): App\Zeta\ZetaClass5 {
    return new App\Zeta\ZetaClass5();
});
$c->set(App\Zeta\ZetaClass6::class, static function (): App\Zeta\ZetaClass6 {
    return new App\Zeta\ZetaClass6();
});

// List assignments
$list['alpha-1'] = App\Alpha\AlphaClass1::class;
$list['alpha-2'] = App\Alpha\AlphaClass2::class;
$list['alpha-3'] = App\Alpha\AlphaClass3::class;
$list['alpha-4'] = App\Alpha\AlphaClass4::class;
$list['alpha-5'] = App\Alpha\AlphaClass5::class;
$list['alpha-6'] = App\Alpha\AlphaClass6::class;
$list['beta-1'] = App\Beta\BetaClass1::class;
$list['beta-2'] = App\Beta\BetaClass2::class;
$list['beta-3'] = App\Beta\BetaClass3::class;
$list['beta-4'] = App\Beta\BetaClass4::class;
$list['beta-5'] = App\Beta\BetaClass5::class;
$list['beta-6'] = App\Beta\BetaClass6::class;
$list['delta-1'] = App\Delta\DeltaClass1::class;
$list['delta-2'] = App\Delta\DeltaClass2::class;
$list['delta-3'] = App\Delta\DeltaClass3::class;
$list['delta-4'] = App\Delta\DeltaClass4::class;
$list['delta-5'] = App\Delta\DeltaClass5::class;
$list['delta-6'] = App\Delta\DeltaClass6::class;
$list['epsilon-1'] = App\Epsilon\EpsilonClass1::class;
$list['epsilon-2'] = App\Epsilon\EpsilonClass2::class;
$list['epsilon-3'] = App\Epsilon\EpsilonClass3::class;
$list['epsilon-4'] = App\Epsilon\EpsilonClass4::class;
$list['epsilon-5'] = App\Epsilon\EpsilonClass5::class;
$list['epsilon-6'] = App\Epsilon\EpsilonClass6::class;
$list['eta-1'] = App\Eta\EtaClass1::class;
$list['eta-2'] = App\Eta\EtaClass2::class;
$list['eta-3'] = App\Eta\EtaClass3::class;
$list['eta-4'] = App\Eta\EtaClass4::class;
$list['eta-5'] = App\Eta\EtaClass5::class;
$list['eta-6'] = App\Eta\EtaClass6::class;
$list['gamma-1'] = App\Gamma\GammaClass1::class;
$list['gamma-2'] = App\Gamma\GammaClass2::class;
$list['gamma-3'] = App\Gamma\GammaClass3::class;
$list['gamma-4'] = App\Gamma\GammaClass4::class;
$list['gamma-5'] = App\Gamma\GammaClass5::class;
$list['gamma-6'] = App\Gamma\GammaClass6::class;
$list['iota-1'] = App\Iota\IotaClass1::class;
$list['iota-2'] = App\Iota\IotaClass2::class;
$list['iota-3'] = App\Iota\IotaClass3::class;
$list['iota-4'] = App\Iota\IotaClass4::class;
$list['iota-5'] = App\Iota\IotaClass5::class;
$list['iota-6'] = App\Iota\IotaClass6::class;
$list['kappa-1'] = App\Kappa\KappaClass1::class;
$list['kappa-2'] = App\Kappa\KappaClass2::class;
$list['kappa-3'] = App\Kappa\KappaClass3::class;
$list['kappa-4'] = App\Kappa\KappaClass4::class;
$list['kappa-5'] = App\Kappa\KappaClass5::class;
$list['kappa-6'] = App\Kappa\KappaClass6::class;
$list['lambda-1'] = App\Lambda\LambdaClass1::class;
$list['lambda-2'] = App\Lambda\LambdaClass2::class;
$list['lambda-3'] = App\Lambda\LambdaClass3::class;
$list['lambda-4'] = App\Lambda\LambdaClass4::class;
$list['lambda-5'] = App\Lambda\LambdaClass5::class;
$list['lambda-6'] = App\Lambda\LambdaClass6::class;
$list['theta-1'] = App\Theta\ThetaClass1::class;
$list['theta-2'] = App\Theta\ThetaClass2::class;
$list['theta-3'] = App\Theta\ThetaClass3::class;
$list['theta-4'] = App\Theta\ThetaClass4::class;
$list['theta-5'] = App\Theta\ThetaClass5::class;
$list['theta-6'] = App\Theta\ThetaClass6::class;
$list['zeta-1'] = App\Zeta\ZetaClass1::class;
$list['zeta-2'] = App\Zeta\ZetaClass2::class;
$list['zeta-3'] = App\Zeta\ZetaClass3::class;
$list['zeta-4'] = App\Zeta\ZetaClass4::class;
$list['zeta-5'] = App\Zeta\ZetaClass5::class;
$list['zeta-6'] = App\Zeta\ZetaClass6::class;
//
print 1;