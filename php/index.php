<?php
/**
 * Date: 7/2/15
 * Time: 9:46 PM
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
require PHP_BASE_PATH . '/Utilities/Functions.php';


if (!isset($argv[1])) {
    echo \Utilities\Bash::makeColor("Type app you want to see. In list of:" . PHP_EOL, \Utilities\Bash::LIGHT_GRAY);
    $list = \Utilities\SmartDirectory::directSubDirs(PHP_BASE_PATH . '/Adventures/DesignPatterns');
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


