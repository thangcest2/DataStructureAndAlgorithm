<?php

class Standard {
  static $var = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
}

class Common {
  protected $_length;
  protected $_dsList = [];
  public function __construct($n) {
    $this->_length = $n;
  }
}

//mảng 1 chiều
class DSListLiteralArray extends Common{

  public function __construct($n) {
    parent::__construct($n);
    for ($i=0;$i<$this->_length;$i++) {
      $this->_dsList[] = Standard::$var[$i];
    }
  }

  public function get() {
    for ($i=0;$i<$this->_length;$i++) {
      echo $this->_dsList[$i];
    }
    echo PHP_EOL;
  }

  public function insert($pos, $val) {
    for ($i=$this->_length;$i>=$pos+1;$i--) {
      $this->_dsList[$i] = $this->_dsList[$i-1];
    }
    $this->_dsList[$pos] = $val;
    $this->_length++;
    $this->get();
  }

  public function delete($pos) {
    for ($i=$pos+1;$i<$this->_length;$i++) {
      $this->_dsList[$i-1] = $this->_dsList[$i];
    }
    $this->_length--;
    $this->get();
  }

}

class SingleNode {
  public $value = null;
  public $alias = null;
  public function __construct($value, $alias = null){
    $this->value = $value;
    $this->alias = $alias;
  }
}
//danh sách nối đơn
class DSListSingleConnect extends Common{
  public function __construct($n) {
    parent::__construct($n);
    for ($i=0;$i<$this->_length;$i++) {
      if ($i == $this->_length-1) {
        $this->_dsList[] = new SingleNode(Standard::$var[$i]);
      } else {
        $this->_dsList[] = new SingleNode(Standard::$var[$i], $i+1);
      }
    }
  }

  public function get() {
    for ($i=0;$i<$this->_length;$i++) {
      echo $this->_dsList[$i]->value;
    }
    echo PHP_EOL;
  }
}

//$o = new DSListLiteralArray(10);
//$o->get();
//$o->insert(5,'V');
//$o->delete(3);

$o = new DSListSingleConnect(10);
$o->get();