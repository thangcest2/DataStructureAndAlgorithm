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

namespace DesignPatterns\AdapterAndFacade\Facade\HomeTheaterSystem;

/**
* @class Tuner
*/

class Tuner
{
    private $_desc = '';

    /**
     * @var float
     */
    private $_frequency = 0;

    private $_amplifier;


    public function __construct($desc, Amplifer $amplifer)
    {
        $this->_desc = $desc;
        $this->_amplifier = $amplifer;
    }

    public function on()
    {
        echo $this->_desc . " on" . PHP_EOL;
    }

    public function off()
    {
        echo $this->_desc . " off" . PHP_EOL;
    }

    public function setAm()
    {
        echo $this->_desc . " setting AM mode" . PHP_EOL;
    }

    public function setFm()
    {
        echo $this->_desc . " setting FM mode" . PHP_EOL;
    }

    /**
     * @param float $frequency
     */
    public function setFrequency($frequency)
    {
        echo $this->_desc . " setting frequency to $frequency" . PHP_EOL;
        $this->_frequency = $frequency;
    }

    public function __toString()
    {
        return $this->_desc;
    }
}