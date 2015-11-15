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

namespace DesignPatterns\Factory\PizzaStore\HoChiMinh;
use DesignPatterns\Factory\PizzaStore\IngredientFactoryInterface;
use DesignPatterns\Factory\PizzaStore\PizzaAbstract;

/**
* @class HoChiMinhCheesePizza
*/

class HoChiMinhCheesePizza extends PizzaAbstract
{
    /**
     * @var IngredientFactoryInterface
     */
    private $_ingredientFactory;

    public function __construct(IngredientFactoryInterface $ingredientFactory)
    {
        $this->_ingredientFactory = $ingredientFactory;
        $this->_name = "HCM Cheese Pizza";
    }

    public function prepare()
    {
        echo "Preparing " . $this->_name . PHP_EOL;
        $this->_dough = $this->_ingredientFactory->createDoughIngredient();
        $this->_sauce = $this->_ingredientFactory->createSauceIngredient();
        $this->_pepperoni = $this->_ingredientFactory->createPepperoniIngredient();
        $this->_clam = $this->_ingredientFactory->createClamIngredient();

    }

}