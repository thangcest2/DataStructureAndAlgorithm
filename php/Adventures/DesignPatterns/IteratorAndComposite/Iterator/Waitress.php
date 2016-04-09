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

namespace DesignPatterns\IteratorAndComposite\Iterator;
use OOPCore\ArrayObject\Vector;
use OOPCore\Iterator\IteratorCreatorInterface;
use OOPCore\Iterator\IteratorInterface;
use Utilities\Bash;

/**
* @class Waitress
*/

class Waitress
{
    /**
     * Vector of IteratorInterface :D
     * @var Vector
     */
    private $_menus;

    //early:
//    public function __construct(PancakeHouseMenu $breakfastMenu, DinnerMenu $dinnerMenu)
//    {
//        $this->_breakfastMenu = $breakfastMenu;
//        $this->_dinnerMenu = $dinnerMenu;
//    }

    //middle
    public function __construct($menus)
    {
        $this->_menus = $menus;
    }

    public function printMenu() {
        $iterator = $this->_menus->getIterator();
        while ($iterator->valid()) {
            $i = $iterator->key();
            echo Bash::makeColor($this->_menus->elementAt($i)->toString() . PHP_EOL, Bash::DARK_GRAY);
            /**
             * @var $menu IteratorCreatorInterface
             */
            $menu = $iterator->next();
            $this->_printHelper($menu->getIterator());
        }

    }

    private function _printHelper(IteratorInterface $iterator) {
        while ($iterator->valid()) {
            /**
             * @var $menuItem MenuItem
             */
            $menuItem = $iterator->next();
            //uncomment below line, nothing happend whether calling $pankageIterator->rewind() or not
            echo Bash::makeColor($menuItem->getName() . PHP_EOL, Bash::BROWN);
            echo $menuItem->getPrice() . PHP_EOL;
        }
    }

}