<?php

namespace DesignPatterns\Observer\WeatherApp;

use DesignPatterns\Observer\Observer\Core\ObserverInterface;
use DesignPatterns\Observer\Observer\Core\Publisher;
use OOPCore\Object;

class StatisticsDisplay extends Object implements ObserverInterface, DisplayInterface
{
    /**
     * Publisher
     */
    private $_publisher;
    private $_stats;

    public function __construct(Publisher $publisher)
    {
        $this->_publisher = $publisher;
        $this->_publisher->addObserver($this);
    }

    public function display()
    {
        echo sprintf("Avg|Max|Min: %s | %s | %s ", $this->_stats['avg'], $this->_stats['max'], $this->_stats['min']) . PHP_EOL;
    }

    /**
     * @param \DesignPatterns\Observer\Observer\Core\Publisher | WeatherStationPublisher $publisher
     * @return void
     */
    public function update(Publisher $publisher)
    {
        if ($publisher instanceof WeatherStationPublisher) {
            $this->_stats = $publisher->getStatistics();
            $this->display();
        }
    }

}