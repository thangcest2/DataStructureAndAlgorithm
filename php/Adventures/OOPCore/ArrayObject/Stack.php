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

namespace OOPCore\ArrayObject;
use OOPCore\Exception\Stack\EmptyStackException;
use OOPCore\Object;

/**
 * @class Stack
 */

class Stack extends Vector
{
    public function push(Object $o)
    {
        $this->addElement($o);
    }

    public function pop()
    {
        $o = $this->peek();
        $this->removeElementAt($this->size()-1);
        return $o;
    }

    public function peek()
    {
        $c = $this->size();
        if ($c <= 0) {
            throw new EmptyStackException("Size <= 0");
        }

        return $this->elementAt($c - 1);
    }

}