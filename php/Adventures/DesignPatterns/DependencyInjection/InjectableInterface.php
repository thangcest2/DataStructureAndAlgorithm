<?php

/**
 * CreatedBy: thang.tran@tiki.vn
 * Date: 10/31/15
 * Time: 2:08 PM
 */
namespace DesignPatterns\DependencyInjection;

interface InjectableInterface
{

    public function setDI($dependencyInjector);

    public function getDI();

}