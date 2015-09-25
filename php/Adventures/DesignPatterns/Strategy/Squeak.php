<?php

namespace StrategyDuck\Squeak;
use StrategyDuck\QuackBehavior;

class Squeak implements QuackBehavior {

  public function quack() {
    echo 'Just some squeak sounds' . PHP_EOL;
  }

} 