<?php

namespace StrategyDuck\MuteQuack;
use StrategyDuck\QuackBehavior;

class MuteQuack implements QuackBehavior {

  public function quack() {
    echo 'Mute!!!' . PHP_EOL;
  }

} 