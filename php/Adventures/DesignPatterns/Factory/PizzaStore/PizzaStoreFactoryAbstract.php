<?php

namespace DesignPatterns\Factory\PizzaStore;

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

        $this->_pizza->prepare();
        $this->_pizza->bake();
        $this->_pizza->cut();
        $this->_pizza->box();

        return $this->_pizza;

    }


}