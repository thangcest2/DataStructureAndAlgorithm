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

use Utilities\Bash;

abstract class PizzaStoreFactoryAbstract {

    /**
     * @var PizzaAbstract
     */
    private $_pizza;

    /**
     * @param string $type
     * @return PizzaAbstract
     */
    protected abstract function createPizza($type);

    public final function orderPizza($type) {
        $this->_pizza = $this->createPizza($type);
        echo Bash::makeColor("__Making : " . $this->_pizza->getName(), Bash::YELLOW) . PHP_EOL;


        $this->_pizza->prepare();

        echo Bash::makeColor("Adding ingredients: ", Bash::BROWN) . PHP_EOL;
        echo $this->_pizza;
        echo PHP_EOL;

        $this->_pizza->bake();
        $this->_pizza->cut();
        $this->_pizza->box();

        return $this->_pizza;

    }


}