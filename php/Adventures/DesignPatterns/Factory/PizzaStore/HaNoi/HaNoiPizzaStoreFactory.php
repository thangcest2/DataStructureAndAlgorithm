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

namespace DesignPatterns\Factory\PizzaStore\HaNoi;

use DesignPatterns\Factory\PizzaStore\PizzaStoreFactoryAbstract;

/**
 * Class HaNoiPizzaStoreFactory
 * @package DesignPatterns\Factory\PizzaStore\HaNoi
 */
class HaNoiPizzaStoreFactory extends PizzaStoreFactoryAbstract
{

    /**
     * @var \DesignPatterns\Factory\PizzaStore\IngredientFactoryInterface
     */
    private $_ingredientFactory;

    /**
     * @param string $type
     * @throw \RuntimeException
     * @return \DesignPatterns\Factory\PizzaStore\PizzaAbstract
     */
    protected function createPizza($type)
    {
        $this->_ingredientFactory = new HaNoiIngredientFactory();

        switch ($type) {
            case "spaggeti" :
                return new HaNoiSpaggetiPizza($this->_ingredientFactory);
            case "cheese" :
                return new HaNoiCheesePizza($this->_ingredientFactory);
            default :
                throw new \RuntimeException("No such type of pizza in this HN Store");
        }
    }

}