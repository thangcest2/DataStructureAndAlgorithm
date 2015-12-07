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

namespace OOPCore\Iterator;

/**
* @interface IteratorInterface
*/

interface IteratorInterface extends \Iterator
{
    /**
     * @return \OOPCore\Object
     */
    public function next();

    /**
     * @return void
     */
    public function remove();

    //TODO add prev() method

}