<?php
/**
 * Date: 7/2/15
 * Time: 9:46 PM
 * @property index.php $index.php
 */

define('PHP_BASE_PATH', dirname(__FILE__));

$loader = new Phalcon\Loader();

$loader->registerNamespaces([
    'DesignPatterns' => PHP_BASE_PATH . '/Adventures/DesignPatterns',
    'OOPCore' => PHP_BASE_PATH . '/Adventures/OOPCore',
    'Services' => PHP_BASE_PATH . '/Adventures/Services',
    'StrategyDuck' => PHP_BASE_PATH . '/Adventures/DesignPatterns/Strategy',
    'Utilities' => PHP_BASE_PATH . '/Utilities'
])->register();

require PHP_BASE_PATH . '/Adventures/Application.php';

//echo Utilities\BashColorsString::make("Type your app name, one of: " . PHP_EOL, 'red');
//$listApps = [
//    'observer',
//    'strategy',
//    'di',
//    'decorator',
//];
//echo Utilities\BashColorsString::make(implode("\n", $listApps) . PHP_EOL, 'yellow');

//$stdin = fopen('php://stdin', 'r');

//fscanf(STDIN, "%d\n", $number);
//$stdout = fopen('php://stdout', 'w');
//$stderr = fopen('php://stderr', 'w');

if (!isset($argv[1])) {
    echo \Utilities\BashColorsString::make("Type app you want to see. In list of:" . PHP_EOL, \Utilities\BashColorsString::LIGHT_GRAY);
    $list = \Utilities\SmartDirectory::directSubDirs('/Users/thangcest2/DataStructureAndAlgorithm/php/Adventures/DesignPatterns');
    foreach ($list as $l) {
        if ($l == 'DependencyInjection') {
            $l = 'di';
        }
        echo strtolower($l) . PHP_EOL;
    }
    echo PHP_EOL;
    $appName = trim(fgets(STDIN));
} else {
    $appName = $argv[1];
}

Application::run($appName);


