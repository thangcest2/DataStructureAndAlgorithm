<?php
/**
 * Date: 10/11/15
 * Time: 6:03 PM
 */

namespace OOPCore\ArrayObject;

use OOPCore\Exception\UnsupportedOperationException;
use OOPCore\Object;

abstract class CollectionAbstract implements CollectionInterface
{
    /**
     * @return array
     */
    public function toArray()
    {
        $objects = [];
        $size = $this->size();
        $it = $this->getIterator();
        for ($i = 0; $i < $size; $i++) {
            if ($it->valid()) {
                $objects[$i] = $it->next();
            }
        }

        return $objects;
    }

    /**
     * @return \OOPCore\Iterator\IteratorInterface
     */
    public abstract function getIterator();

    /**
     * @param \OOPCore\Object $o
     * @throw UnsupportedOperationException
     * @return bool
     */
    public function add(Object $o) {
        throw new UnsupportedOperationException;
    }

    /**
     * @param \OOPCore\Object $o
     * @return void
     */
    public function remove(Object $o)
    {
        $it = $this->getIterator();
        if ($o === null) {
            while ($it->valid()) {
                if ($it->next() === null) {
                    $it->remove();
                    return true;
                }
            }
        } else {
            while ($it->valid()) {
                if ($o->equals($it->next())) {
                    $it->remove();
                    return true;
                }
            }
        }

        return false;

    }

    public abstract function size();

    public function isEmpty()
    {
        return $this->size() === 0;
    }

    public function contains(Object $o)
    {
        $it = $this->getIterator();
        if ($o === null) {
            while ($it->valid()) {
                if ($it->next() === null) {
                    return true;
                }
            }
        } else {
            while ($it->valid()) {
                if ($o->equals($it->next())) {
                    return true;
                }
            }
        }
        return false;
    }

    /**
     * @param CollectionInterface | \OOPCore\Object[] $c
     * @return bool
     */
    public function addAll(CollectionInterface $c)
    {
        $modified = false;
        foreach ($c as $e) {
            if ($this->add($e)) {
                $modified = true;
            }
        }
        return $modified;
        
    }

    /**
     * @param CollectionInterface $c
     * @return bool
     */
    public function removeAll(CollectionInterface $c)
    {
        $modified = false;
        $it = $this->getIterator();
        while ($it->valid()) {
            if ($c->contains($it->next())) {
                $it->remove();
                $modified = true;
            }
        }

        return $modified;

    }

}
