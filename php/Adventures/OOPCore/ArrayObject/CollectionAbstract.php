<?php
namespace OOPCore\ArrayObject;

use OOPCore\CollectionInterface;
use OOPCore\Exception\UnsupportedOperationException;
use OOPCore\Object;

/**
 * Date: 10/11/15
 * Time: 6:03 PM
 */
abstract class CollectionAbtract implements CollectionInterface
{

    /**
     * @var \OOPCore\Object[]
     */
    protected $_data = [];

    protected function __construct(){}

    /**
     * @param $props
     * @return void
     */
    public function toArray($props = null)
    {
        foreach ($this->_data as $i => $o) {
            $this->_data[$i] = $o->toArray();
        }
    }

    /**
     * @return \OOPCore\Iterator\IteratorInterface
     */
    public abstract function getIterator();


    public function add(Object $o) {
        throw new UnsupportedOperationException;
    }

    /**
     * @throws UnsupportedOperationException
     * @return void
     */
    public function remove()
    {

    }

    public abstract function size();

    public function isEmpty()
    {
        return $this->size() === 0;
    }

    public function contains(Object $o)
    {

    }

    public function addAll(CollectionInterface $c)
    {

    }

    public function removeAll(CollectionInterface $c)
    {

    }

}
