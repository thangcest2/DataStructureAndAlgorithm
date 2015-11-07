<?php

/**
 * CreatedBy: thang.tran@tiki.vn
 * Date: 10/31/15
 * Time: 2:16 PM
 */

/**
 * Interface ServiceInterface
 * @package DesignPatterns\DependencyInjection
 */

namespace DesignPatterns\DependencyInjection;

interface ServiceInterface
{

    public function setDefination($defination);

    public function getDefination();

}