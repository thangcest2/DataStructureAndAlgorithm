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
//$appName = trim(fgets(STDIN));

Application::run($argv[1]);


