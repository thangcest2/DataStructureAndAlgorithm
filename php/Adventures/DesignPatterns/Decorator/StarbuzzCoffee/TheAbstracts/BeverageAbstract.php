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

namespace DesignPatterns\Decorator\StarbuzzCoffee\TheAbstracts;
use OOPCore\Object;

/**
 * @abstract class BeverageAbstract
 */

abstract class BeverageAbstract extends Object
{
    protected $_description = 'No Beverage';

    public function getDescription()
    {
        return $this->_description;
    }

    public abstract function cost();

    //todo open to add getSize() + setSize() methods + increse cost by size

}