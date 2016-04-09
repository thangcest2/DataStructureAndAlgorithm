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


namespace DesignPatterns\Factory\PizzaStore;

/**
 * To force each type of pizza must have the same set of ingredients
 *
 * From the book, as implemented below, this interface provide a list of given ingredients.
 *
 * So very confuse, once a new Ingredient comes, we do need to add new variable for new ingredients !!!
 * -- it's false to design principle, this class then must be modify, WTF O'Reilly ???
 *
 * @note: these functions can be pass $type also
 *
 * Interface IngredientFactoryInterface
 * @package DesignPatterns\Factory\PizzaStore
 */

interface IngredientFactoryInterface
{

    /**
     * @return \DesignPatterns\Factory\PizzaStore\Ingredients\DoughIngredientInterface
     */
    public function createDoughIngredient();

    /**
     * @return \DesignPatterns\Factory\PizzaStore\Ingredients\SauceIngredientInterface
     */
    public function createSauceIngredient();

    /**
     * @return \DesignPatterns\Factory\PizzaStore\Ingredients\ClamIngredientInterface
     */
    public function createClamIngredient();

    /**
     * @return \DesignPatterns\Factory\PizzaStore\Ingredients\PepperoniIngredientInterface
     */
    public function createPepperoniIngredient();


}