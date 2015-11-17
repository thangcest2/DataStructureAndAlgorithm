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

namespace DesignPatterns\Singleton\EagerInstantiation;

/**
* @class SingleTon
*/

class SingleTon
{
    //syntax not support in php, but yes in java
    private static $uniqueInstance = new SingleTon();

    private function __construct() {}

    public static function getInstance() {
        if (self::$uniqueInstance == null) {
            self::$uniqueInstance = new SingleTon();
        }
        return self::$uniqueInstance;
    }

    public function test()
    {
        echo 'Hello world !!!' . PHP_EOL;
    }




}