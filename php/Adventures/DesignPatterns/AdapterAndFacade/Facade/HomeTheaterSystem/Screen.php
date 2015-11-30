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

namespace DesignPatterns\AdapterAndFacade\Facade\HomeTheaterSystem;

/**
* @class Screen
*/

class Screen
{
    private $_desc;

    public function __construct($desc){
        $this->_desc = $desc;
    }

    public function up()
    {
        echo $this->_desc . " going up" . PHP_EOL;
    }

    public function down()
    {
        echo $this->_desc . " going down" . PHP_EOL;
    }

    public function __toString() {
        return $this->_desc;
    }

}