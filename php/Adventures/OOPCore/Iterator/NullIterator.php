<?php

/**
 * Created by thangcest2@gmail.com
 * Date 12/7/15
 * Time 12:33 AM
 */

namespace OOPCore\Iterator;

use OOPCore\Object;

class NullIterator extends Object implements IteratorInterface
{
    public function next()
    {
        return null;
    }

    public function remove()
    {
        return false;
    }

    public function current()
    {
        return false;
    }

    public function key()
    {
        return false;
    }

    public function valid()
    {
        return false;
    }

    public function rewind()
    {
        return false;
    }

}