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

namespace DesignPatterns\Observer\Observer\Core;
use DesignPatterns\Observer\WeatherApp\DisplayImplement;
use OOPCore\ArrayObject\Collection;
use OOPCore\ArrayObject\Vector;
use OOPCore\Object;

/**
 * @class Publisher
 * @package Observer\Observer\Core
 */

class Publisher extends Object
{
    /**
     * @var bool
     */
    protected $_change = false;

    /**
     * @var \OOPCore\ArrayObject\Vector | ObserverInterface[] | \OOPCore\Object[]
     */
    protected $_observers;

    /**
     * init observers with zero member
     */
    public function __construct()
    {
        $this->_observers = new Vector([]);
    }

    /**
     * @param ObserverInterface | \OOPCore\Object $o
     */
    public function addObserver(ObserverInterface $o) {
        if (!$this->_observers->contains($o)) {
            $this->_observers->addElement($o);
        }
    }

    /**
     * @param ObserverInterface | \OOPCore\Object $o
     */
    public function removeObserver(ObserverInterface $o) {
        $this->_observers->removeElement($o);
    }

    /**
     * @return void
     */
    public function setChange() {
        $this->_change = true;
    }

    /**
     * @return bool
     */
    public function hasChange() {
        return $this->_change === true;
    }

    public function clearChange()
    {
        $this->_change = false;
    }

    /**
     * @return void
     */
    public function notifyObservers() {
        if (!$this->_change) {
            return;
        }

        $this->clearChange();
        $size = $this->_observers->size();
        for ($i = 0; $i < $size; $i++) {
            $this->_observers->elementAt($i)->update($this);
        }
    }

    public function getAllObservers()
    {
        return $this->_observers;
    }

}