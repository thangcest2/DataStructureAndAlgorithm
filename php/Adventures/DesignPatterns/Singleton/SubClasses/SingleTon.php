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

namespace DesignPatterns\Singleton\SubClasses;

/**
 * can not be inheritted
* @class SingleTon
*/

class SingleTon
{
    private static $uniqueInstance;

    protected function __construct() {}

    public static function getInstance() {
        if (self::$uniqueInstance == null) {
            self::$uniqueInstance = new self();
        }
        return self::$uniqueInstance;
    }

    public function test()
    {
        echo 'Hello world !!!' . PHP_EOL;
    }

}