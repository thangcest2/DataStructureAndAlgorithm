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

namespace DesignPatterns\TemplateMethod;

/**
* @class Coffee
*/

class Coffee extends CaffeineBeverageAbstract
{
    public function brew()
    {
        echo "Brewing coffee" . PHP_EOL;
    }

    public function addCondiments()
    {
        echo "Added sugar and milk" . PHP_EOL;
    }

    public function moreCondiments()
    {
        echo "Adding condiments ..." . PHP_EOL;
        return true;
    }

}