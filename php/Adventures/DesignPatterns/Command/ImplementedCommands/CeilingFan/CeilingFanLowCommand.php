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

namespace DesignPatterns\Command\ImplementedCommands\CeilingFan;

/**
* @class CeilingFanLowCommand
*/

class CeilingFanLowCommand extends CeilingFanCommandGeneral
{
    public function execute() {
        $this->_previousSpeed = $this->_ceilingFan->getSpeed();
        echo "Speed now is " . $this->_previousSpeed . PHP_EOL;
        $this->_ceilingFan->low();
    }


}