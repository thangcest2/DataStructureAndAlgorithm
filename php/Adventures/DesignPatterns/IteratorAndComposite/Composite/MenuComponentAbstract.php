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
use OOPCore\Exception\UnsupportedOperationException;
use OOPCore\Iterator\IteratorCreatorInterface;
use OOPCore\Iterator\IteratorInterface;
use OOPCore\Object;

/**
 * @abstract class MenuComponentAbstractAbstract
 */

abstract class MenuComponentAbstract extends Object implements IteratorCreatorInterface
{
    //composite methods
    public function add(MenuComponentAbstract $MenuComponentAbstract)
    {
        throw new UnsupportedOperationException();
    }

    public function remove(MenuComponentAbstract $MenuComponentAbstract)
    {
        throw new UnsupportedOperationException();
    }

    /**
     * @param $i
     * @return MenuComponentAbstract
     */
    public function getChild($i){
        throw new UnsupportedOperationException();
    }

    /**
     * @return IteratorInterface
     */
    public abstract function getIterator();

    //operation methods
    public function getName()
    {
        throw new UnsupportedOperationException();
    }

    public function getPrice()
    {
        throw new UnsupportedOperationException();
    }

    public function printHelper()
    {
        throw new UnsupportedOperationException();
    }

}