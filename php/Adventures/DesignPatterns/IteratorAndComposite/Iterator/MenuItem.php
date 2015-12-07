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
use DesignPatterns\IteratorAndComposite\Composite\MenuComponentAbstract;
use OOPCore\Iterator\NullIterator;
use Utilities\Bash;

/**
* @class MenuItem
*/

class MenuItem extends MenuComponentAbstract
{
    private $_name;
    private $_vegetarian;
    private $_price;

    public function __construct($name, $vegetarian, $price = 0)
    {
        $this->_name = $name;
        $this->_vegetarian = $vegetarian;
        $this->_price = $price;
    }

    public function getIterator()
    {
        return new NullIterator();
    }

    public function getName()
    {
        return $this->_name;
    }

    public function getVegetarian()
    {
        return $this->_vegetarian;
    }

    public function getPrice()
    {
        return $this->_price;
    }

    public function printHelper($space = "") {
        echo $space . Bash::makeColor("Name: " . $this->_name . ", Price: " . $this->_price . PHP_EOL, Bash::YELLOW);
    }

}