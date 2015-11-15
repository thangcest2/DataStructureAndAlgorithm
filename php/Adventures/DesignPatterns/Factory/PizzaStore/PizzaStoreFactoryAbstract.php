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

use Utilities\BashColorsString;

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
        echo BashColorsString::make("__Making : " . $this->_pizza->getName(), BashColorsString::YELLOW) . PHP_EOL;


        $this->_pizza->prepare();

        echo BashColorsString::make("Adding ingredients: ", BashColorsString::BROWN) . PHP_EOL;
        echo $this->_pizza;
        echo PHP_EOL;

        $this->_pizza->bake();
        $this->_pizza->cut();
        $this->_pizza->box();

        return $this->_pizza;

    }


}