<?php

namespace StrategyDuck\Quackable;
use StrategyDuck\QuackBehavior;

class Quackable implements QuackBehavior {
  public function quack() {
    echo 'I am quacking' . PHP_EOL;
  }
} 