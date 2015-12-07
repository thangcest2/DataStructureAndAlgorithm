<?php

/**
 * Created by thang.tran@tiki.vn
 * Date 12/7/15
 * Time 12:33 AM
 */

namespace OOPCore\Iterator;

class NullIterator implements IteratorInterface
{
    public function next()
    {
        return false;
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