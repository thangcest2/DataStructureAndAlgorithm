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

namespace DesignPatterns\Singleton\SubClasses;

/**
* @class Test1
*/

class Test1 extends SingleTon
{
    protected function __construct() {

    }

    public function test2()
    {
        echo 'Hello world !!!' . PHP_EOL;
    }


}