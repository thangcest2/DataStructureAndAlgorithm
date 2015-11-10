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
])->register();

require PHP_BASE_PATH . '/Adventures/Application.php';

Application::run('observer');
Application::run('strategy');
Application::run('di');


