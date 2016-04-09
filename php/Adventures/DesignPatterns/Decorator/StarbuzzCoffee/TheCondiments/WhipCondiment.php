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

namespace DesignPatterns\Decorator\StarbuzzCoffee\TheCondiments;
use DesignPatterns\Decorator\StarbuzzCoffee\TheAbstracts\BeverageAbstract;
use DesignPatterns\Decorator\StarbuzzCoffee\TheAbstracts\CondimentDecoratorAbstract;

/**
* @class WhipCondiment
*/

class WhipCondiment extends CondimentDecoratorAbstract {

    /**
     * @var BeverageAbstract
     */
    private $_beverage;
    private $_cost;

    public function __construct(BeverageAbstract $beverage, $cost = 0)
    {
        $this->_beverage = $beverage;
        $this->_cost = $cost;
        $this->_description = $this->toString();
    }

    public function getDescription()
    {
        return $this->_beverage->getDescription() . ", " . $this->_description . " $" . $this->_cost;
    }

    public function cost()
    {
        return $this->_cost + $this->_beverage->cost();
    }

}