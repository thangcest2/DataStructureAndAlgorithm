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

namespace DesignPatterns\Observer\Observer\Core;

/**
 * Interface ObserverInterface
 * @package DesignPatterns\Observer\Observer\Core
 */
interface ObserverInterface
{
    /**
     * @param Publisher $publisher
     * @return mixed
     */
    public function update(Publisher $publisher);

}