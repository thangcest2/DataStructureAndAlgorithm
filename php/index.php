<?php
/**
 * Date: 7/2/15
 * Time: 9:46 PM
 * @property index.php $index.php
 */

define('BASE_PATH', dirname(__FILE__));

$loader = new Phalcon\Loader();

$loader->registerNamespaces([
    'DesignPatterns' => BASE_PATH . '/Adventures/DesignPatterns',
    'OOPCore' => BASE_PATH . '/Adventures/OOPCore',
    'Services' => BASE_PATH . '/Adventures/Services'
])->register();


function observerWeatherApp() {
    $publisher = new \DesignPatterns\Observer\WeatherApp\WeatherStationPublisher();
    $device1 = new \DesignPatterns\Observer\WeatherApp\DisplayImplement($publisher);
    $device2 = new \DesignPatterns\Observer\WeatherApp\DisplayImplement($publisher);
    $device3 = new \DesignPatterns\Observer\WeatherApp\DisplayImplement($publisher);
    $publisher->removeObserver($device1);
    $publisher->addObserver($device2);
    $publisher->addObserver($device2);
    $publisher->addObserver($device2);
    $publisher->addObserver($device2);

    $publisher->setMeasurement('20%', 10.5, 5.4);
}

observerWeatherApp();

