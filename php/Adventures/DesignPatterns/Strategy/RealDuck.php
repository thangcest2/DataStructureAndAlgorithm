<?php

namespace StrategyDuck;
use StrategyDuck\Duck;
use StrategyDuck\FlyWithWings\FlyWithWings;
use StrategyDuck\Quackable\Quackable;

class RealDuck extends Duck {
  public function display() {
    echo 'I am a real duck' . PHP_EOL;
  }

  public function fly() {
//    $this->setFlyBehavior(new FlyWithWings());
    $this->performFly();
  }

  public function quack() {
//    $this->setQuackBehavior(new Quackable());
    $this->performQuack();
  }

  public function __destruct() {
    echo 'desconstructing memory of Realduck instance' . PHP_EOL;
    unset($this);
  }

}