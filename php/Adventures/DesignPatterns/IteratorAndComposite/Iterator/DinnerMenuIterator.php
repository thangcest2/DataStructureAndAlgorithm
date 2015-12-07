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

namespace DesignPatterns\IteratorAndComposite\Iterator;
use OOPCore\Exception\IllegalStateException;
use OOPCore\Iterator\IteratorInterface;

/**
* @class DinnerMenuIterator
*/

class DinnerMenuIterator implements IteratorInterface
{
    /**
     * @var MenuItem[]
     */
    private $_items;

    /**
     * @var int
     */
    private $_pos = 0;

    /**
     * @param MenuItem[] $items
     */
    public function __construct($items)
    {
        $this->_items = $items;
    }

    /**
     * @return bool
     */
    public function valid()
    {
        if ($this->_pos >= count($this->_items) || $this->_items[$this->_pos] === null) {
            return false;
        }
        return true;
    }

    /**
     * @return MenuItem
     */
    public function next()
    {
        $item = $this->_items[$this->_pos];
        $this->_pos++;
        return $item;
    }

    public function key()
    {

    }

    public function current()
    {

    }

    public function rewind()
    {
        $this->_pos = 0;
    }

    public function remove()
    {
        if ($this->_pos <= 0) {
            throw new IllegalStateException("Can not remove item until you have done at least one next() call");
        }

        $this->_pos--;
        if ($this->_items[$this->_pos] !== null) {
            for ($i = $this->_pos; $i < count($this->_items) - 1; $i++) {
                $this->_items[$i] = $this->_items[$i+1];
            }
            unset($this->_items[count($this->_items) - 1]);

        }

    }

}