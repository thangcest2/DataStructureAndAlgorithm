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

use DesignPatterns\Factory\PizzaStore\PizzaStoreFactoryAbstract;

class HoChiMinhPizzaStoreFactory extends PizzaStoreFactoryAbstract
{

    protected function createPizza($type)
    {
        switch ($type) {
            case "spaggeti" :
                return new HoChiMinhSpaggetiPizza();
            case "cheese" :
                return new HoChiMinhCheesePizza();
            default :
                throw new \RuntimeException("No such type of pizza in this HCM Store");

        }
    }

}