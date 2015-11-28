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
 |          or             <thang.tran@tiki.vn>                           |
 +------------------------------------------------------------------------+
*/

namespace OOPCore\ArrayObject;
use OOPCore\Object;

/**
 * Class Vector
 * @package OOPCore\ArrayObject
 */
class Vector
{
    /**
     * @var \OOPCore\Object[]
     */
    protected $_elementData = [];

    /**
     * @param int
     */
    protected $_elementCount;

    /**
     * @var \OOPCore\Object[] | \OOPCore\ArrayObject\Collection $obs
     */
    public function __construct($obs = [])
    {
        $this->_elementData = $obs;
        $this->_elementCount = count($obs);
    }

    /**
     * @return int
     */
    public function size()
    {
        return $this->_elementCount;
    }

    /**
     * @return bool
     */
    public function isEmpty()
    {
        return $this->_elementCount == 0;
    }

    /**
     * @param \OOPCore\Object $o
     * @return bool
     */
    public function contains(Object $o)
    {
        return $this->indexOf($o, 0) > 0;
    }

    /**
     * @param \OOPCore\Object $o
     * @param int $index
     * @return int
     */
    public function indexOf(Object $o, $index = 0) {
        if ($o == null) {
            for ($i = $index; $i < $this->_elementCount; $i++) {
                if ($this->_elementData[$i] == null) return $i;
            }
        }

        for ($i = $index; $i < $this->_elementCount; $i++) {
            if ($o->equals($this->_elementData[$i])) return $i;
        }

        return -1;
    }

    /**
     * @param \OOPCore\Object $o
     */
    public function addElement(Object $o) {
        $this->_elementData[$this->_elementCount++] = $o;
    }

    /**
     * @param \OOPCore\Object $o
     * @param $index
     */
    public function insertElementAt(Object $o, $index)
    {
        for ($i = $this->_elementCount; $i > $index+1; $i--) {
            $this->_elementData[$i] = $this->_elementData[$i-1];
        }
        $this->_elementData[$index] = $o;
        $this->_elementCount++;
    }

    /**
     * @param int $index
     */
    public function removeElementAt($index)
    {
        if ($index >= $this->_elementCount) {
            throw new \OutOfBoundsException($index . " >= " . $this->_elementCount);
        } else if ($index < 0) {
            throw new \OutOfBoundsException($index);
        }

        for ($i = $index+1; $i < $this->_elementCount; $i++) {
            $this->_elementData[$i-1] = $this->_elementData[$i];
        }

        $this->_elementCount--;
        unset($this->_elementData[$this->_elementCount]);

    }

    /**
     * @param \OOPCore\Object $o
     * @return bool
     */
    public function removeElement(Object $o)
    {
        $i = $this->indexOf($o);
        if ($i >= 0) {
            $this->removeElementAt($i);
            return true;
        }

        return false;
    }

    /**
     * @throws \OutOfBoundsException
     * @param int $i
     * @return \OOPCore\Object
     */
    public function elementAt($i)
    {
        if ($i >= $this->_elementCount) {
            throw new \OutOfBoundsException($i . " >= " . $this->_elementCount);
        }

        return $this->_elementData[$i];
    }

    /**
     * @throws \LengthException
     * @return \OOPCore\Object
     */
    public function firstElement()
    {
        if ($this->_elementCount == 0) {
            throw new \LengthException(0);
        }
        return $this->_elementData[0];

    }

    /**
     * @throws \LengthException
     * @return \OOPCore\Object
     */
    public function lastElement()
    {
        if ($this->_elementCount == 0) {
            throw new \LengthException(0);
        }
        return $this->_elementData[$this->_elementCount-1];
    }

    /**
     * convert all elements in Vector to array
     */
    public function toArray()
    {
        foreach ($this->_elementData as $i => $o) {
            $this->_elementData[$i] = $o;
        }

        return $this->_elementData;

    }


}