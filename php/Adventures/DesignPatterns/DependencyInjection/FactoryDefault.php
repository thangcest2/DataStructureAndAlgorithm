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
use Phalcon\Loader as PhalconLoader;

class FactoryDefault extends DependencyInjector
{

    public function __construct()
    {
        parent::__construct();
        $this->_services = [
            'eventsManager' => new Service('eventsManager', '\DesignPatterns\Observer\Events\Manager', true),
            'router'        => new Service('router', '\DesignPatterns\Mvc\Router', true),
            'dispatcher'    => new Service('dispatcher', '\DesignPatterns\Mvc\Dispatcher', true),
            'request'       => new Service('request', '\DesignPatterns\Mvc\WebMethods\Http\Request', true),
            'cookie'        => new Service('cookie', '\DesignPatterns\Mvc\WebMethods\Http\Cookie', true),
            'response'      => new Service('response', '\DesignPatterns\Mvc\WebMethods\Http\Response', true),
            'modelsManager' => new Service('modelsManager', '\DesignPatterns\Mvc\Model\Manager', true),
        ];

    }

}