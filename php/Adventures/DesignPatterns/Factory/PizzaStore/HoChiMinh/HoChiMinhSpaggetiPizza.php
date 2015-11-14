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

use DesignPatterns\Factory\PizzaStore\PizzaAbstract;

/**
 * @class HoChiMinhSpaggetiPizza
 */
class HoChiMinhSpaggetiPizza extends PizzaAbstract
{

    public function __construct()
    {
        $this->_name = "HCM Spaggeti Pizza";
    }

}