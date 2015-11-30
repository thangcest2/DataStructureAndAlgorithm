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

namespace DesignPatterns\AdapterAndFacade\Adapter;

/**
* @class BlackDog
*/

class BlackDog implements DogInterface
{
    public function gogo()
    {
        echo "Black Dog is gogoing" . PHP_EOL;
    }

    public function jump()
    {
        echo "Black Dog is jumping" . PHP_EOL;
    }

}