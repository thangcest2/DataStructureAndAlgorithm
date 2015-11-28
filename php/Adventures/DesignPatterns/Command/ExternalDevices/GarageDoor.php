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

namespace DesignPatterns\Command\ExternalDevices;

/**
* @class GarageDoor
*/

class GarageDoor
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

    public function up()
    {
        echo $this->_name . " Door uping" . PHP_EOL;
    }

    public function down()
    {
        echo $this->_name . " Door downing" . PHP_EOL;
    }

    public function stop()
    {
        echo $this->_name . " Door stopped" . PHP_EOL;
    }

    public function lightOn()
    {
        echo $this->_name . " Garage Light is on" . PHP_EOL;
    }

    public function lightOff()
    {
        echo $this->_name . " Garage Light is off" . PHP_EOL;
    }

}