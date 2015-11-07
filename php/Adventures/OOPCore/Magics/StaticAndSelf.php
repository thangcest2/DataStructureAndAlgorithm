<?php
/**
 * Date: 10/11/15
 * Time: 4:14 PM
 * @property StaticAndSelf.php $StaticAndSelf.php
 */

class Foo {
    public function __toString() {
        return get_class($this);
    }

    public static function selfBaz()
    {
        return new self();
    }

    public static function staticBar(){
        return new static();
    }

}

class Bar extends Foo {

}

echo Bar::selfBaz() . PHP_EOL;
echo Bar::staticBar() . PHP_EOL;