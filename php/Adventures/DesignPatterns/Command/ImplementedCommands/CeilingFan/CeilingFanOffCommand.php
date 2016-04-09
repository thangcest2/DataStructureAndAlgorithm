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

namespace DesignPatterns\Command\ImplementedCommands\CeilingFan;

/**
* @class CeilingFanOffCommand
*/

class CeilingFanOffCommand extends CeilingFanCommandGeneral
{
    public function execute() {
        $this->_previousSpeed = $this->_ceilingFan->getSpeed();
        echo "Speed now is " . $this->_previousSpeed . PHP_EOL;
        $this->_ceilingFan->off();
    }
}