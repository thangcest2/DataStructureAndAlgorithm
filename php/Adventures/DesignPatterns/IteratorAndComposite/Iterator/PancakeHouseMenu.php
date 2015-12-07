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
use OOPCore\ArrayObject\Vector;
use OOPCore\Object;

/**
* @class PancakeHouseMenu
*/

class PancakeHouseMenu extends Object implements \IteratorAggregate
{
    /**
     * @var Vector
     */
    private $_items;

    public function __construct()
    {
        $this->_items = new Vector([]);
        $this->addItem("K&B’s Pancake Breakfast", true, 2.77);
        $this->addItem("Regular Pancake Breakfast", true, 3.77);
        $this->addItem("Blueberry Pancakes", true, 1.77);
        $this->addItem("Waffles", true, 0.77);
    }

    public function addItem($name, $vege, $price)
    {
        $menuItem = new MenuItem($name, $vege, $price);
        $this->_items->addElement($menuItem);
    }

    public function getIterator()
    {
        return $this->_items->getIterator();
    }

    /**
     * @return Vector
     */
    public function getMenuItems()
    {
        return $this->_items;
    }

}