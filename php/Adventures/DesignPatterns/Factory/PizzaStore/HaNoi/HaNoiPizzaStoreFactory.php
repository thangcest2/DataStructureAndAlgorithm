<?php

namespace DesignPatterns\Factory\PizzaStore\HaNoi;

use DesignPatterns\Factory\PizzaStore\PizzaStoreFactoryAbstract;

class HaNoiPizzaStoreFactory extends PizzaStoreFactoryAbstract
{

    protected function createPizza($type)
    {
        switch ($type) {
            case "spaggeti" :
                return new HaNoiSpaggetiPizza();
            case "cheese" :
                return new HaNoiCheesePizza();
            default :
                throw new \RuntimeException("No such type of pizza in this HN Store");
        }
    }

}