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

namespace DesignPatterns\Singleton\NonThreadSafe;

/**
 * If php interpreter someway approve multithreading, this class is non thread safe
* @class SingleTon
*/

class SingleTon
{
    private static $uniqueInstance;

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