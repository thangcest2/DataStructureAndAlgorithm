<?php

namespace DesignPatterns\DependencyInjection;
use Phalcon\Loader as PhalconLoader;

class FactoryDefault extends DependencyInjector
{

    public function __construct()
    {
        parent::__construct();
        $this->_services = [
            'eventsManager' => new Service('eventsManager', '\Observer\EventsManager\Manager', true),
            'router'        => new Service('router', '\Mvc\Router', true),
            'dispatcher'    => new Service('dispatcher', '\Mvc\Dispatcher', true),
            'request'       => new Service('request', '\Mvc\WebMethods\Http\Request', true),
            'cookie'        => new Service('cookie', '\Mvc\WebMethods\Http\Cookie', true),
            'response'      => new Service('response', '\Mvc\WebMethods\Http\Response', true),
            'modelsManager' => new Service('modelsManager', '\Mvc\Model\Manager', true),
        ];

    }

}