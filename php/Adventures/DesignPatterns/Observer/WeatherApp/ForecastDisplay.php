<?php

namespace DesignPatterns\Observer\WeatherApp;

use DesignPatterns\Observer\Observer\Core\ObserverInterface;
use DesignPatterns\Observer\Observer\Core\Publisher;
use OOPCore\Object;

class ForecastDisplay extends Object implements ObserverInterface, DisplayInterface
{
    /**
     * Publisher
     */
    private $_publisher;

    private $_foreCast;

    public function __construct(Publisher $publisher) {
        $this->_publisher = $publisher;
        $this->_publisher->addObserver($this);
    }

    public function display()
    {
        echo "Predict: " . $this->_foreCast . PHP_EOL;
    }

    /**
     * @param \DesignPatterns\Observer\Observer\Core\Publisher | WeatherStationPublisher $publisher
     * @return void
     */
    public function update(Publisher $publisher)
    {
        //base on some calculations from statistics, predict the weather
        if ($publisher instanceof WeatherStationPublisher) {
            $this->_foreCast = $publisher->getForeCast();
            $this->display();
        }

    }



}