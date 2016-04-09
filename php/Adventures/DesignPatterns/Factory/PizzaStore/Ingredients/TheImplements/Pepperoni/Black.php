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

namespace DesignPatterns\Factory\PizzaStore\Ingredients\TheImplements\Pepperoni;
use DesignPatterns\Factory\PizzaStore\Ingredients\PepperoniIngredientInterface;

/**
* @class Black
*/

class Black implements PepperoniIngredientInterface
{
    public function toString()
    {
        return "Black Pepperoni";
    }
}