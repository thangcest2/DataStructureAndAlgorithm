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