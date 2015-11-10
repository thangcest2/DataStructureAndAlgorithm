<?php

namespace StrategyDuck;

class Squeak implements QuackBehavior {

  public function quack() {
    echo 'Just some squeak sounds' . PHP_EOL;
  }

} 