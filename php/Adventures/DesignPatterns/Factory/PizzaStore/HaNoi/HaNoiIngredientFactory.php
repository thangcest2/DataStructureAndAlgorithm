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

namespace DesignPatterns\Factory\PizzaStore\HaNoi;

use DesignPatterns\Factory\PizzaStore\IngredientFactoryInterface;
use DesignPatterns\Factory\PizzaStore\Ingredients\TheImplements as Ingredient;

/**
 * Class HaNoiIngredientFactory
 * @package DesignPatterns\Factory\PizzaStore\HaNoi
 */
class HaNoiIngredientFactory implements IngredientFactoryInterface
{

    /**
     * @return Ingredient\Dough\Thin
     */
    public function createDoughIngredient()
    {
        return new Ingredient\Dough\Thin();
    }

    /**
     * @return Ingredient\Saunce\Marinara
     */
    public function createSauceIngredient()
    {
        return new Ingredient\Saunce\Marinara();
    }

    /**
     * @return Ingredient\Pepperoni\Black
     */
    public function createPepperoniIngredient(){
        return new Ingredient\Pepperoni\Black();
    }

    /**
     * @return Ingredient\Clam\Fresh
     */
    public function createClamIngredient()
    {
        return new Ingredient\Clam\Fresh();
    }

}