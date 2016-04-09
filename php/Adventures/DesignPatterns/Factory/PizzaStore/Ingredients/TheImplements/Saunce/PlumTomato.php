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

namespace DesignPatterns\Factory\PizzaStore\Ingredients\TheImplements\Saunce;
use DesignPatterns\Factory\PizzaStore\Ingredients\SauceIngredientInterface;

/**
* @class PlumTomato
*/

class PlumTomato implements SauceIngredientInterface
{
    public function toString()
    {
        return "Plum Tomato Saunce";
    }
}