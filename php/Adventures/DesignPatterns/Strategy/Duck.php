<?php

namespace StrategyDuck;
use StrategyDuck\FlyBehavior;
use StrategyDuck\QuackBehavior;

abstract class Duck {
  private $_fly;
  private $_quack;

  public function __construct(FlyBehavior $flyBehavior, QuackBehavior $quackBehavior) {
    $this->_fly = $flyBehavior;
    $this->_quack = $quackBehavior;
  }

  abstract public function display();

  public function swim() {
    echo 'By default all duck can swim' . PHP_EOL;
  }

  public function setFlyBehavior(FlyBehavior $flyBehavior) {
    $this->_fly = $flyBehavior;
  }

  public function setQuackBehavior(QuackBehavior $quackBehavior) {
    $this->_quack = $quackBehavior;
  }

  public function getQuackBehavior() {
    return $this->_quack;
  }

  public function getFlyBehavior() {
    return $this->_fly;
  }

  public function performFly() {
    $this->getFlyBehavior()->fly();
  }

  public function performQuack() {
    $this->getQuackBehavior()->quack();
  }

}