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

namespace DesignPatterns\AdapterAndFacade\Facade\HomeTheaterSystem;

/**
* @class TheaterLights
*/

class TheaterLights
{
    private $_desc;

    public function __construct($desc)
    {
        $this->_desc = $desc;
    }

    public function on()
    {
        echo $this->_desc . " on" . PHP_EOL;
    }

    public function off()
    {
        echo $this->_desc . " off" . PHP_EOL;
    }

    public function dim($level)
    {
        echo $this->_desc . " dimming to $level%" . PHP_EOL;
    }

    public function __toString()
    {
        return $this->_desc;
    }
}