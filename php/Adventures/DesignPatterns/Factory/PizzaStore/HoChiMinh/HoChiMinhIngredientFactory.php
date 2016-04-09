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

namespace DesignPatterns\Factory\PizzaStore\HoChiMinh;
use DesignPatterns\Factory\PizzaStore\IngredientFactoryInterface;
use DesignPatterns\Factory\PizzaStore\Ingredients\TheImplements as Ingredient;

/**
 * Class HoChiMinhIngredientFactory
 * @package DesignPatterns\Factory\PizzaStore\HoChiMinh
 */

class HoChiMinhIngredientFactory implements IngredientFactoryInterface
{
    /**
     * @return Ingredient\Dough\Thick
     */
    public function createDoughIngredient()
    {
        return new Ingredient\Dough\Thick();
    }

    /**
     * @return Ingredient\Saunce\PlumTomato
     */
    public function createSauceIngredient()
    {
        return new Ingredient\Saunce\PlumTomato();
    }

    /**
     * @return Ingredient\Pepperoni\White
     */
    public function createPepperoniIngredient(){
        return new Ingredient\Pepperoni\White();
    }

    /**
     * @return Ingredient\Clam\Frozen
     */
    public function createClamIngredient()
    {
        return new Ingredient\Clam\Frozen();
    }


}