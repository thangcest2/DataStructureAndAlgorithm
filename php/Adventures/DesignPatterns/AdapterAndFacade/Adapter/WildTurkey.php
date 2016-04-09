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

namespace DesignPatterns\AdapterAndFacade\Adapter;

/**
* @class WildTurkey
*/

class WildTurkey implements TurKeyInterface
{
    public function gobble()
    {
        echo "Wild Turkey Gobbling" . PHP_EOL;
    }

    public function fly()
    {
        echo "Wild Turkey Flying with short distance" . PHP_EOL;
    }

}