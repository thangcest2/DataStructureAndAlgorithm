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

namespace DesignPatterns\Decorator\StarbuzzCoffee\TheAbstracts;

/**
 * @abstract class CondimentDecoratorAbstract
 */

abstract class CondimentDecoratorAbstract extends BeverageAbstract
{
    public function getDescription() {
        return $this->_description;
    }

}