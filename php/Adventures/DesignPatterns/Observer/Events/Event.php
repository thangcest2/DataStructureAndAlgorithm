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

namespace DesignPatterns\Observer\Events;
use DesignPatterns\Observer\Observer\Core\Publisher;
use OOPCore\Object;
use DesignPatterns\Observer\Observer\Core\ObserverInterface;

/**
 * @class Event
 */

class Event extends Object implements ObserverInterface
{
    /**
     * @var Publisher
     */
    private $_manager;

    public function update(Publisher $manager)
    {
        $this->_manager = $manager;
        $this->_manager->addObserver($this);

    }

}