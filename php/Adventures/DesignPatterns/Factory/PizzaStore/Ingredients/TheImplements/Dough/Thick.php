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

namespace DesignPatterns\Factory\PizzaStore\Ingredients\TheImplements\Dough;
use DesignPatterns\Factory\PizzaStore\Ingredients\DoughIngredientInterface;

/**
* @class Thick
*/

class Thick implements DoughIngredientInterface
{
    public function toString()
    {
        return "Thick Dough";
    }
}