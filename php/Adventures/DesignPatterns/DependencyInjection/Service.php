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

namespace DesignPatterns\DependencyInjection;

class Service implements ServiceInterface
{
    protected $_name;

    protected $_defination;

    protected $_share;

    public function __construct($name, $defination, $share = false) {
        $this->_name = $name;
        $this->_defination = $defination;
        $this->_share = $share;
    }

    public function setDefination($defination) {
        $this->_defination = $defination;
    }

    public function getDefination() {
        return $this->_defination;
    }

    public function getShare(){
        return $this->_share;
    }

    public function setShare($isShare) {
        $this->_share = $isShare;
    }


}