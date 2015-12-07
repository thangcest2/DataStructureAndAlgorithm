<?php

namespace OOPCore;

use Utilities\Text;

class Object implements \ArrayAccess
{
    protected $_data = [];

    public function setData($key = null, $data = null)
    {
        if ($key === null) {
            $this->_data = $data;
        } else {
            $this->_data[$key] = $data;
        }

        return $this;
    }

    public function equals(Object $o)
    {
        return ($this === $o);
    }

    public function __toString() {
        return get_class($this);
    }

    public function toString()
    {
        return Text::deCamelize((new \ReflectionClass($this))->getShortName(), ' ', 'ucfirst');
    }

    public function __set($name, $value) {
        $this->_data[$name] = $value;
    }

    public function __get($name) {
        $name = lcfirst($name);

        if ($name == 'data') {
            return $this->_data;
        }

        if (array_key_exists($name, $this->_data)) {
            return $this->_data[$name];
        }

        return null;

    }

    public function __call($name, $arguments = []) {
        switch (substr($name, 0, 3)) {
            case 'get' :
                $v = ucfirst(substr($name,3));
                return isset($this->_data[$v]) ? $this->_data[$v] : null;
            case 'set' :
                $v = lcfirst(substr($name,3));
                $this->_data[$v] = empty($arguments) ? null : $arguments[0];
                return;
            case 'has' :
                return array_key_exists(lcfirst(substr($name,3)), $this->_data);
        }
    }

    public function __unset($name) {
        unset($this->_data[$name]);
    }

    public function __isset($name) {
        return isset($this->_data[$name]);
    }

    public static function __callStatic($name, $arguments) {

    }

    public static function bigLoop($var = []) {
        foreach ($var as $k => $v) {
            yield $k => $v;
        }
    }

    /**
     *
     * @param array|string $props
     * @return array
     */
    public function toArray($props = null)
    {
        if (empty($props)) {
            return $this->_data;
        }

        if (is_string($props)) {
            if (!isset($this->_data[$props])) {
                throw new \InvalidArgumentException($props);
            }

            if (is_object($this->_data[$props])) {
                $this->_data[$props] = static::__toArray($this->_data[$props]);
            }
        } else if (is_array($props)) {
            foreach ($props as $prop) {
                if (!isset($this->_data[$prop])) {
                    throw new \InvalidArgumentException($prop);
                }
                static::__toArray($this->_data[$prop]);
            }
        } else {
            throw new \InvalidArgumentException($props);
        }

        return $this->_data;

    }

    /**
     * @param type Object $o
     * @return array
     */
    public static function __toArray(&$o) {
        foreach ($o as $i => &$attr) {
            if (is_object($attr)) {
                static::__toArray($attr);
            }
        }
        return (array) $o;
    }


    /**
     * Implementation of ArrayAccess::offsetSet()
     *
     * @link http://www.php.net/manual/en/arrayaccess.offsetset.php
     * @param string $offset
     * @param mixed $value
     */
    public function offsetSet($offset, $value)
    {
        $this->_data[$offset] = $value;
    }

    /**
     * Implementation of ArrayAccess::offsetExists()
     *
     * @link http://www.php.net/manual/en/arrayaccess.offsetexists.php
     * @param string $offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->_data[$offset]);
    }

    /**
     * Implementation of ArrayAccess::offsetUnset()
     *
     * @link http://www.php.net/manual/en/arrayaccess.offsetunset.php
     * @param string $offset
     */
    public function offsetUnset($offset)
    {
        unset($this->_data[$offset]);
    }

    /**
     * Implementation of ArrayAccess::offsetGet()
     *
     * @link http://www.php.net/manual/en/arrayaccess.offsetget.php
     * @param string $offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->_data[$offset]) ? $this->_data[$offset] : null;
    }

    public function __destruct() {
        unset($this);
    }

}

