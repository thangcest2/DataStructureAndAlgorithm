<?php

namespace StrategyDuck\FlyNoWay;
use StrategyDuck\FlyBehavior;

class FlyNoWay implements FlyBehavior {

  public function fly() {
    echo 'I can not fly' . PHP_EOL;
  }

} 