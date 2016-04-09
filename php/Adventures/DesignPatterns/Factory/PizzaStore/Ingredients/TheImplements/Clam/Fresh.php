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

namespace DesignPatterns\Factory\PizzaStore\Ingredients\TheImplements\Clam;
use DesignPatterns\Factory\PizzaStore\Ingredients\ClamIngredientInterface;

/**
* @class Fresh
*/

class Fresh implements ClamIngredientInterface
{
    public function toString()
    {
        return "Fresh Clam";
    }
}