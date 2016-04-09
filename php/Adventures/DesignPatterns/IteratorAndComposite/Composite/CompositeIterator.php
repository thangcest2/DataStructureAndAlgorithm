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
use OOPCore\ArrayObject\Stack;
use OOPCore\Exception\UnsupportedOperationException;
use OOPCore\Iterator\IteratorInterface;
use OOPCore\Object;

/**
* @class CompositeIterator
*/

class CompositeIterator extends Object implements IteratorInterface
{
    /**
     * @var Stack
     */
    private $_stack;

    public function __construct(IteratorInterface $iteratorInterface)
    {
        if ($this->_stack === null) {
            $this->_stack = new Stack();
        }
        if ($iteratorInterface instanceof Object) {
            $this->_stack->push($iteratorInterface);
        }
    }

    public function valid()
    {
        if ($this->_stack->isEmpty()) {
            return false;
        }
        /**
         * @var $it IteratorInterface
         */
        $it = $this->_stack->peek();
        if (!$it->valid()) {
            $this->_stack->pop();
            return $this->valid();
        }

        return true;
    }

    public function next()
    {
        if ($this->valid()) {
            /**
             * @var $iterator IteratorInterface
             */
            $iterator = $this->_stack->peek();
            $menuComponent = $iterator->next();
            if ($menuComponent instanceof Menu) {
                $this->_stack->push($menuComponent->getIterator());
                return $menuComponent;
            }
        }
        return null;
    }

    public function current()
    {

    }

    public function key()
    {

    }

    public function remove()
    {
        throw new UnsupportedOperationException();
    }

    public function rewind()
    {

    }


}