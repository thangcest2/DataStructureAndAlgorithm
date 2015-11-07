<?php

namespace DesignPatterns\DependencyInjection;

/**
 * Interface DependencyInjectorInterface
 * @package DependencyInjection
 */

interface DependencyInjectorInterface
{

    /**
     * @param $service
     * @param mixed|callable|classNameWithConstructor
     * @param boolean $isShare
     * @return mixed
     */
    public function set($service, $defination, $isShare);

    /**
     * @param $name
     * @param $parameters
     * @return ServiceInterface
     */
    public function get($name, $parameters);

    /**
     * @param $name
     * @return mixed
     */
    public function getService($name);

    /**
     * @return mixed
     */
    public function getServices();

}