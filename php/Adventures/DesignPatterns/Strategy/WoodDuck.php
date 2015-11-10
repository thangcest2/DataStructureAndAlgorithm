<?php

namespace StrategyDuck;

class WoodDuck extends Duck {

  public function fly() {
    $this->setFlyBehavior(new FlyNoWay());
    $this->performFly();
  }

  public function quack() {
    $this->setQuackBehavior(new Squeak());
    $this->performQuack();
  }

  public function display() {
    echo 'I am a wood duck' . PHP_EOL;
  }

  public function swim(){
    echo 'Wood duck swimming' . PHP_EOL;
  }

  public function __destruct() {
    unset($this);
  }


} 