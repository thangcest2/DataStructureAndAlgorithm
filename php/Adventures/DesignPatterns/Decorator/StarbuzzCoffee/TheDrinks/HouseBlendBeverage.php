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

namespace DesignPatterns\Decorator\StarbuzzCoffee\TheDrinks;
use DesignPatterns\Decorator\StarbuzzCoffee\TheAbstracts\BeverageAbstract;

/**
* @class HouseBlendBeverage
*/

class HouseBlendBeverage extends BeverageAbstract {

    private $_cost;

    public function __construct($cost){
        $this->_cost = $cost;
        $this->_description = $this->toString() . " $" . $this->_cost;
    }

    public function cost()
    {
        return $this->_cost;
    }

}