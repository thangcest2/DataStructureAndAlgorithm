<?php
namespace OOPCore\ArrayObject;
use OOPCore\Object;

/**
 * Date: 10/11/15
 * Time: 6:03 PM
 * @property Collection.php $Collection.php
 */

class Collection extends Object implements \IteratorAggregate, \Countable {


    /**
     * @var \OOPCore\Object[]
     */
    protected $_data = [];

    /**
     * @return int
     */
    public function count()
    {
        return count($this->_data);
    }

    /**
     * @param array $objectList
     */
    public function __construct($objectList = []) {
        $this->_data = $objectList;
    }

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
     * @return \ArrayIterator
     */
    public function getIterator() {
        return new \ArrayIterator($this->_data);
    }

}
