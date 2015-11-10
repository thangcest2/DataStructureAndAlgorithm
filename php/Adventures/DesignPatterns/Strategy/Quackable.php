<?php

namespace StrategyDuck;

class Quackable implements QuackBehavior {
  public function quack() {
    echo 'I am quacking' . PHP_EOL;
  }
}