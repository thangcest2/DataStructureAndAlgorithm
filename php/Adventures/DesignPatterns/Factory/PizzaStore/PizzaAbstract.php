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

namespace DesignPatterns\Factory\PizzaStore;

    /**
     * @abstract class PizzaAbstract
     */

/**
 * Class PizzaAbstract
 * @package DesignPatterns\Factory\PizzaStore
 */
abstract class PizzaAbstract
{

    /**
     * @var string
     */
    protected $_name;

    /**
     * @var \DesignPatterns\Factory\PizzaStore\Ingredients\SauceIngredientInterface
     */
    protected $_sauce;

    /**
     * @var \DesignPatterns\Factory\PizzaStore\Ingredients\DoughIngredientInterface
     */
    protected $_dough;

    /**
     * @var \DesignPatterns\Factory\PizzaStore\Ingredients\ClamIngredientInterface
     */
    protected $_clam;

    /**
     * @var \DesignPatterns\Factory\PizzaStore\Ingredients\PepperoniIngredientInterface
     */

    protected $_pepperoni;


    /**
     * Let all the Concrete Pizza decide its IngredientFactory and create ingredient themselves
     * -- but must in set of : sauce, dough, clam, pepperoni
     * @note: Assume that the super pizza provider gave us these ingredients totally
     *
     * @return void
     */
    public abstract function prepare();

    /**
     * @return void
     */
    public function bake()
    {
        echo "Baking in 20 mins" . PHP_EOL;
    }

    /**
     * @return void
     */
    public function cut()
    {
        echo "Cutting Pizza" . PHP_EOL;
    }

    /**
     * @return void
     */
    public function box()
    {
        echo "Placing Pizza in official PizzaStore box ... done !!!" . PHP_EOL;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->_name;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return implode(", ", [
            $this->_dough->toString(),
            $this->_sauce->toString(),
            $this->_clam->toString(),
            $this->_pepperoni->toString()
        ]);
    }


}