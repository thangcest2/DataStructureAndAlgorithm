<?php
/*
 +------------------------------------------------------------------------+
 | ThangTD Adventures                                                     |
 +------------------------------------------------------------------------+
 | Source (https://github.com/thangcest2/DataStructureAndAlgorithm)       |
 +------------------------------------------------------------------------+
 | In love with my wife Mai Phuong Nguyen                                 |
 +------------------------------------------------------------------------+
 | Authors: Tran Duc Thang <thangcest2@gmail.com>                         |
 |          or             <thangcest2@gmail.com>                           |
 +------------------------------------------------------------------------+
*/

namespace DesignPatterns\Observer\WeatherApp;

use DesignPatterns\Observer\Observer\Core\Publisher;
use Utilities\Math;

/**
 * @class WeatherStationPublisher
 */
class WeatherStationPublisher extends Publisher
{

    private $_temprature;
    private $_humidity;
    private $_pressure;

    private $_statistics = [];

    public function measurementChanged()
    {
        $this->setChange();
        $this->notifyObservers();
    }

    public function setMeasurement($temprature, $humidity, $pressure)
    {
        $this->_temprature = $temprature;
        $this->_humidity   = $humidity;
        $this->_pressure   = $pressure;

        $this->setStatistics($temprature);

        $this->measurementChanged();
    }

    public function getTemprature()
    {
        return $this->_temprature;
    }

    public function getHumidity()
    {
        return $this->_humidity;
    }

    public function getPressure()
    {
        return $this->_pressure;
    }

    public function setStatistics($temprature)
    {
        $this->_statistics[] = $temprature;
    }

    public function getStatistics($type = false)
    {
        $calc = [
            'max' => max($this->_statistics),
            'min' => min($this->_statistics),
            'avg' => Math::average($this->_statistics),
        ];

        if ($type) {
            return $calc[$type];
        }

        return $calc;

    }

    public function getForeCast()
    {
        $offset = $this->_temprature - $this->getStatistics('avg');
        if ($offset > 2) {
            return 'Sunny';
        }

        if ($offset < -2) {
            return 'Rainy';
        }

        return 'Seem Same';

    }


}