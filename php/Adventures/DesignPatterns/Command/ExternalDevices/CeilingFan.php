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

namespace DesignPatterns\Command\ExternalDevices;

/**
* @class CeilingFan
*/

class CeilingFan
{
    const HIGHT = 3;
    const MEDIUM = 2;
    const LOW = 1;
    const OFF = 0;

    private $_location;
    private $_speed;

    public function __construct($location)
    {
        $this->_location = $location;
        $this->_speed = self::OFF;
    }

    public function hight()
    {
        $this->_speed = self::HIGHT;
        echo $this->_location . " Ceiling Fan is set to hight - 3" . PHP_EOL;
    }

    public function medium()
    {
        $this->_speed = self::MEDIUM;
        echo $this->_location . " Ceiling Fan is set to medium - 2" . PHP_EOL;
    }

    public function low()
    {
        $this->_speed = self::LOW;
        echo $this->_location . " Ceiling Fan is set to low - 1" . PHP_EOL;
    }

    public function off()
    {
        $this->_speed = self::OFF;
        echo $this->_location . " Ceiling Fan is off - 0" . PHP_EOL;
    }

    public function getSpeed()
    {
        return $this->_speed;
    }

}