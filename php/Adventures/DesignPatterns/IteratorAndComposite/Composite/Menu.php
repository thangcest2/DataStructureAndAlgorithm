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

namespace DesignPatterns\IteratorAndComposite\Composite;
use OOPCore\ArrayObject\Vector;
use OOPCore\Iterator\IteratorInterface;
use Utilities\Bash;

/**
* @class Menu
*/

class Menu extends MenuComponentAbstract
{
    /**
     * @var Vector
     */
    private $_menuComponents;

    private $_name;

    /**
     * @var IteratorInterface
     */
    private $_iterator;

    public function __construct($name)
    {
        $this->_name = $name;
        $this->_menuComponents = new Vector();
    }

    public function getIterator()
    {
        if ($this->_iterator === null) {
            $this->_iterator = new CompositeIterator($this->_menuComponents->getIterator());
        }
        return $this->_iterator;
    }

    public function add(MenuComponentAbstract $menuComponentAbstract)
    {
        $this->_menuComponents->addElement($menuComponentAbstract);
    }

    public function remove(MenuComponentAbstract $menuComponentAbstract)
    {
        $this->_menuComponents->removeElement($menuComponentAbstract);
    }

    /**
     * @param $i
     * @return MenuComponentAbstract
     */
    public function getChild($i)
    {
        return $this->_menuComponents->elementAt($i);
    }

    public function getName()
    {
        return $this->_name;
    }

    public function isVegetarian()
    {
        return false;
    }

    public function printHelper()
    {
        echo Bash::makeColor($this->_name . PHP_EOL, Bash::DARK_GRAY);
        $iterator = $this->_menuComponents->getIterator();
        while ($iterator->valid()) {
            /**
             * @var $menuComponent MenuComponentAbstract
             */

            $menuComponent = $iterator->next();
            $menuComponent->printHelper();
        }

    }

}