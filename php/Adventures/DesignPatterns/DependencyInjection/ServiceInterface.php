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

/**
 * CreatedBy: thangcest2@gmail.com
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