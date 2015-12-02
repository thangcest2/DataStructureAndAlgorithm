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

namespace DesignPatterns\TemplateMethod;

/**
* @class Tea
*/

class Tea extends CaffeineBeverageAbstract
{
    public function brew()
    {
        echo "Brewing tea" . PHP_EOL;
    }

    public function addCondiments()
    {
        echo "Added lemon" . PHP_EOL;
    }

    public function moreCondiments()
    {
        echo "No condiment !" . PHP_EOL;
        return false;
    }

}