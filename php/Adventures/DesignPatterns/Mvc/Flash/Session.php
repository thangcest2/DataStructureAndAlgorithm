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

namespace DesignPatterns\Mvc\Flash;
use DependencyInjection\DependencyInjector;
use DependencyInjection\Injectable;
use DesignPatterns\Mvc\Session\AdapterInterface;

/**
 * @class Session
 *
 * Note: This is a test of implement of injectable,
 *
 *
 */

class Session extends Injectable
{
    public function __construct(){
        $this->setDI(DependencyInjector::getDefault());
    }

    public function setDI($dependencyInjector)
    {
        $this->_dependencyInjector = $dependencyInjector;
    }


//    public function getDI()
//    {
//        return $this->_dependencyInjector;
//    }

    protected $_type;

    public function setMessage($type = 'string', $message = '')
    {
        $this->_type = $type;
        $this->_message = $message;
    }

    public function getMessage() {
        if ($this->_type == 'string') return $this->_message;
    }

}