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
* @class Stereo
*/

class Stereo
{
    private $_name;

    public function __construct($name)
    {
        $this->_name = $name;
    }

    public function getName()
    {
        return $this->_name;
    }

    public function on()
    {
        echo $this->_name . " Stereo is on" . PHP_EOL;
    }

    public function off()
    {
        echo $this->_name . " Stereo is off" . PHP_EOL;
    }

    public function setCD()
    {
        echo $this->_name . " Set CD mode on Stereo" . PHP_EOL;
    }

    public function setDVD()
    {
        echo $this->_name . " Set DVD mode on Stereo" . PHP_EOL;
    }

    public function setRadio()
    {
        echo $this->_name . " Set Radio mode on Stereo" . PHP_EOL;
    }

    public function setVolume($v)
    {
        echo $this->_name . " Stereo Volume is set by $v" . PHP_EOL;
    }

}