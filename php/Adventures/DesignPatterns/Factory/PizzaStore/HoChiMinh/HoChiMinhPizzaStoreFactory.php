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

use DesignPatterns\Factory\PizzaStore\PizzaStoreFactoryAbstract;

/**
 * Class HoChiMinhPizzaStoreFactory
 * @package DesignPatterns\Factory\PizzaStore\HoChiMinh
 */
class HoChiMinhPizzaStoreFactory extends PizzaStoreFactoryAbstract
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
        $this->_ingredientFactory = new HoChiMinhIngredientFactory();

        switch ($type) {
            case "spaggeti" :
                return new HoChiMinhSpaggetiPizza($this->_ingredientFactory);
            case "cheese" :
                return new HoChiMinhCheesePizza($this->_ingredientFactory);
            default :
                throw new \RuntimeException("No such type of pizza in this HCM Store");

        }
    }

}