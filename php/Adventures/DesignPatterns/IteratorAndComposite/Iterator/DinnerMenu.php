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
use OOPCore\Iterator\IteratorCreatorInterface;
use OOPCore\Object;

/**
* @class DinerMenu
*/

class DinnerMenu extends Object implements IteratorCreatorInterface
{
    /**
     * @var []
     */
    private $_items = [];

    public static $MAX_ITEM = 6;

    private $_numOfItems = 0;

    public function __construct()
    {
        $this->addItem("Vegetarian BLT", true, 2.99);
        $this->addItem("BLT", true, 3.99);
        $this->addItem("Soup of the day", true, 1.99);
        $this->addItem("Hotdog", true, 0.99);
    }

    public function addItem($name, $vege, $price)
    {
        $menuItem = new MenuItem($name, $vege, $price);
        if ($this->_numOfItems > self::$MAX_ITEM) {
            echo "Maximum items reached" . PHP_EOL;
        } else {
            $this->_items[] = $menuItem;
            $this->_numOfItems++;
        }
    }

    public function getIterator()
    {
        return new DinnerMenuIterator($this->_items);
    }

    /**
     * @return array
     */
    public function getMenuItems()
    {
        return $this->_items;
    }

}