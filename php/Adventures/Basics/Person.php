<?php

//public, private, !!!protected

class Person {
  protected $_name;
  protected $_birth;

  public function setName($name) {
    $this->_name = $name;
  }

  public function getName() {
    return $this->_name;
  }

  public function setBirth($birth) {
    $this->_birth = $birth;
  }

  public function getBirth() {
    return $this->_birth;
  }

  public function whoAmI() {
    return "I am " . $this->getName() . '. My birthday is '. $this->getBirth() . PHP_EOL;
  }
}

class Staff extends Person {
  private $_major;
  private $_preName = '';

  public function setPreName($preName) {
    $this->_preName = $preName;
  }

  public function setName($name) {
    $this->_name = $this->_preName . $name;
  }

  public function setMajor($major){
    $this->_major = $major;
  }

  public function getMajor(){
    return $this->_major;
  }

  public function moreDetail() {
    return "I am " . $this->getName() . '. My birthday is '. $this->getBirth() . ' . My major is ' . $this->getMajor() . PHP_EOL;
  }

}

$person = new Person();
$person->setName('Anbe');
//$person->setName('Anbe');
echo $person->getName();
// $name is set
//$person->setBirth('2910');

//echo $person->whoAmI();
var_dump([1,2]);
