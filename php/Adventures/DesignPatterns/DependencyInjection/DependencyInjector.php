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

namespace DesignPatterns\DependencyInjection;

/**
 * Class DependencyInjector
 * @package DesignPatterns\DependencyInjection
 */
class DependencyInjector implements DependencyInjectorInterface
{
    /**
     * @param DependencyInjector
    */
    protected static $_default = [];

    /**
     * @param ServiceInterface[]
     */
    protected $_services = [];

    protected $_shareInstances = [];

    /**
     *
     */
    public function __construct()
    {
        self::$_default = $this;
    }

    public static function getDefault() {
        return self::$_default;
    }

    /**
     * @param $name
     * @param $defination
     * @param bool|false $isShare
     * @return ServiceInterface
     */
    public function set($name, $defination, $isShare = false)
    {
        $service = new Service($name, $defination, $isShare);
        $this->_services[$name] = $service;
        return $service;

    }

    /**
     * @param $name
     * @param $parameters
     * @throws \ErrorException
     * @return ServiceInterface
     */
    public function get($name, $parameters = null)
    {
        if (isset($this->_services[$name])) {
            $service = $this->_services[$name];
            $defination = $service->getDefination();
            if (is_object($defination)) {
                if ($defination instanceof \Closure) {
                    if (is_array($parameters)) {
                        return call_user_func_array($defination, $parameters);
                    }
                    return call_user_func($defination);
                }
                return $defination;
            } else {
                //in case of class name
                $instance = (new \ReflectionClass($service->getDefination()))->newInstance();
            }
            return $instance;
        } else {
            //handle in case of injectable class
            if (class_exists($name)) {
                $reflection = new \ReflectionClass($name);
                return $reflection->newInstance();
            }

        }

        throw new \ErrorException("Service $name is not yet defined.");

    }


    /**
     * @param $name
     * @return ServiceInterface
     * @throws \ErrorException
     */
    public function getService($name) {
        if (!$this->_services[$name])
            return $this->_services[$name];
        throw new \ErrorException("Service $name not found");
    }

    /**
     * @return ServiceInterface[]
     */
    public function getServices() {
        return $this->_services;
    }

}