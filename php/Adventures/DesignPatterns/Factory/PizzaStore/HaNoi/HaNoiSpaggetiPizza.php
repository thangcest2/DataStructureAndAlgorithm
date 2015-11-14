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

namespace DesignPatterns\Factory\PizzaStore\HaNoi;
use DesignPatterns\Factory\PizzaStore\PizzaAbstract;

/**
* @class HaNoiSpaggetiPizza
*/

class HaNoiSpaggetiPizza extends PizzaAbstract {

    public function __construct()
    {
        $this->_name = "HN Spaggeti Pizza";
    }

    public function bake()
    {
        echo "Baking in 30 mins. WOW so long" . PHP_EOL;
    }

}