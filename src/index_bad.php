<?php
require_once 'vendor/autoload.php';

$list = [];

// Alpha
$list['alpha-1'] = static function (): App\Alpha\AlphaClass1 { return new App\Alpha\AlphaClass1(); };
$list['alpha-2'] = static function (): App\Alpha\AlphaClass2 { return new App\Alpha\AlphaClass2(); };
$list['alpha-3'] = static function (): App\Alpha\AlphaClass3 { return new App\Alpha\AlphaClass3(); };
$list['alpha-4'] = static function (): App\Alpha\AlphaClass4 { return new App\Alpha\AlphaClass4(); };
$list['alpha-5'] = static function (): App\Alpha\AlphaClass5 { return new App\Alpha\AlphaClass5(); };
$list['alpha-6'] = static function (): App\Alpha\AlphaClass6 { return new App\Alpha\AlphaClass6(); };
// Beta
$list['beta-1'] = static function (): App\Beta\BetaClass1 { return new App\Beta\BetaClass1(); };
$list['beta-2'] = static function (): App\Beta\BetaClass2 { return new App\Beta\BetaClass2(); };
$list['beta-3'] = static function (): App\Beta\BetaClass3 { return new App\Beta\BetaClass3(); };
$list['beta-4'] = static function (): App\Beta\BetaClass4 { return new App\Beta\BetaClass4(); };
$list['beta-5'] = static function (): App\Beta\BetaClass5 { return new App\Beta\BetaClass5(); };
$list['beta-6'] = static function (): App\Beta\BetaClass6 { return new App\Beta\BetaClass6(); };
// Delta
$list['delta-1'] = static function (): App\Delta\DeltaClass1 { return new App\Delta\DeltaClass1(); };
$list['delta-2'] = static function (): App\Delta\DeltaClass2 { return new App\Delta\DeltaClass2(); };
$list['delta-3'] = static function (): App\Delta\DeltaClass3 { return new App\Delta\DeltaClass3(); };
$list['delta-4'] = static function (): App\Delta\DeltaClass4 { return new App\Delta\DeltaClass4(); };
$list['delta-5'] = static function (): App\Delta\DeltaClass5 { return new App\Delta\DeltaClass5(); };
$list['delta-6'] = static function (): App\Delta\DeltaClass6 { return new App\Delta\DeltaClass6(); };
// Epsilon
$list['epsilon-1'] = static function (): App\Epsilon\EpsilonClass1 { return new App\Epsilon\EpsilonClass1(); };
$list['epsilon-2'] = static function (): App\Epsilon\EpsilonClass2 { return new App\Epsilon\EpsilonClass2(); };
$list['epsilon-3'] = static function (): App\Epsilon\EpsilonClass3 { return new App\Epsilon\EpsilonClass3(); };
$list['epsilon-4'] = static function (): App\Epsilon\EpsilonClass4 { return new App\Epsilon\EpsilonClass4(); };
$list['epsilon-5'] = static function (): App\Epsilon\EpsilonClass5 { return new App\Epsilon\EpsilonClass5(); };
$list['epsilon-6'] = static function (): App\Epsilon\EpsilonClass6 { return new App\Epsilon\EpsilonClass6(); };
// Eta
$list['eta-1'] = static function (): App\Eta\EtaClass1 { return new App\Eta\EtaClass1(); };
$list['eta-2'] = static function (): App\Eta\EtaClass2 { return new App\Eta\EtaClass2(); };
$list['eta-3'] = static function (): App\Eta\EtaClass3 { return new App\Eta\EtaClass3(); };
$list['eta-4'] = static function (): App\Eta\EtaClass4 { return new App\Eta\EtaClass4(); };
$list['eta-5'] = static function (): App\Eta\EtaClass5 { return new App\Eta\EtaClass5(); };
$list['eta-6'] = static function (): App\Eta\EtaClass6 { return new App\Eta\EtaClass6(); };
// Gamma
$list['gamma-1'] = static function (): App\Gamma\GammaClass1 { return new App\Gamma\GammaClass1(); };
$list['gamma-2'] = static function (): App\Gamma\GammaClass2 { return new App\Gamma\GammaClass2(); };
$list['gamma-3'] = static function (): App\Gamma\GammaClass3 { return new App\Gamma\GammaClass3(); };
$list['gamma-4'] = static function (): App\Gamma\GammaClass4 { return new App\Gamma\GammaClass4(); };
$list['gamma-5'] = static function (): App\Gamma\GammaClass5 { return new App\Gamma\GammaClass5(); };
$list['gamma-6'] = static function (): App\Gamma\GammaClass6 { return new App\Gamma\GammaClass6(); };
// Iota
$list['iota-1'] = static function (): App\Iota\IotaClass1 { return new App\Iota\IotaClass1(); };
$list['iota-2'] = static function (): App\Iota\IotaClass2 { return new App\Iota\IotaClass2(); };
$list['iota-3'] = static function (): App\Iota\IotaClass3 { return new App\Iota\IotaClass3(); };
$list['iota-4'] = static function (): App\Iota\IotaClass4 { return new App\Iota\IotaClass4(); };
$list['iota-5'] = static function (): App\Iota\IotaClass5 { return new App\Iota\IotaClass5(); };
$list['iota-6'] = static function (): App\Iota\IotaClass6 { return new App\Iota\IotaClass6(); };
// Kappa
$list['kappa-1'] = static function (): App\Kappa\KappaClass1 { return new App\Kappa\KappaClass1(); };
$list['kappa-2'] = static function (): App\Kappa\KappaClass2 { return new App\Kappa\KappaClass2(); };
$list['kappa-3'] = static function (): App\Kappa\KappaClass3 { return new App\Kappa\KappaClass3(); };
$list['kappa-4'] = static function (): App\Kappa\KappaClass4 { return new App\Kappa\KappaClass4(); };
$list['kappa-5'] = static function (): App\Kappa\KappaClass5 { return new App\Kappa\KappaClass5(); };
$list['kappa-6'] = static function (): App\Kappa\KappaClass6 { return new App\Kappa\KappaClass6(); };
// Lambda
$list['lambda-1'] = static function (): App\Lambda\LambdaClass1 { return new App\Lambda\LambdaClass1(); };
$list['lambda-2'] = static function (): App\Lambda\LambdaClass2 { return new App\Lambda\LambdaClass2(); };
$list['lambda-3'] = static function (): App\Lambda\LambdaClass3 { return new App\Lambda\LambdaClass3(); };
$list['lambda-4'] = static function (): App\Lambda\LambdaClass4 { return new App\Lambda\LambdaClass4(); };
$list['lambda-5'] = static function (): App\Lambda\LambdaClass5 { return new App\Lambda\LambdaClass5(); };
$list['lambda-6'] = static function (): App\Lambda\LambdaClass6 { return new App\Lambda\LambdaClass6(); };
// Theta
$list['theta-1'] = static function (): App\Theta\ThetaClass1 { return new App\Theta\ThetaClass1(); };
$list['theta-2'] = static function (): App\Theta\ThetaClass2 { return new App\Theta\ThetaClass2(); };
$list['theta-3'] = static function (): App\Theta\ThetaClass3 { return new App\Theta\ThetaClass3(); };
$list['theta-4'] = static function (): App\Theta\ThetaClass4 { return new App\Theta\ThetaClass4(); };
$list['theta-5'] = static function (): App\Theta\ThetaClass5 { return new App\Theta\ThetaClass5(); };
$list['theta-6'] = static function (): App\Theta\ThetaClass6 { return new App\Theta\ThetaClass6(); };
// Zeta
$list['zeta-1'] = static function (): App\Zeta\ZetaClass1 { return new App\Zeta\ZetaClass1(); };
$list['zeta-2'] = static function (): App\Zeta\ZetaClass2 { return new App\Zeta\ZetaClass2(); };
$list['zeta-3'] = static function (): App\Zeta\ZetaClass3 { return new App\Zeta\ZetaClass3(); };
$list['zeta-4'] = static function (): App\Zeta\ZetaClass4 { return new App\Zeta\ZetaClass4(); };
$list['zeta-5'] = static function (): App\Zeta\ZetaClass5 { return new App\Zeta\ZetaClass5(); };
$list['zeta-6'] = static function (): App\Zeta\ZetaClass6 { return new App\Zeta\ZetaClass6(); };
//
print 1;