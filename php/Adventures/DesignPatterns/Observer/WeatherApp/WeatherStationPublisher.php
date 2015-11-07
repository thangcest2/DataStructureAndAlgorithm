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
 |          or             <thang.tran@tiki.vn>                           |
 +------------------------------------------------------------------------+
*/

namespace DesignPatterns\Observer\WeatherApp;
use DesignPatterns\Observer\Observer\Core\Publisher;

/**
* @class WeatherStationPublisher
*/

class WeatherStationPublisher extends Publisher {

    private $_temprature;
    private $_humidity;
    private $_pressure;

    public function measurementChanged() {
        $this->setChange();
        $this->notifyObservers();
    }

    public function setMeasurement($temprature, $humidity, $pressure)
    {
        $this->_temprature = $temprature;
        $this->_humidity = $humidity;
        $this->_pressure = $pressure;
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


}