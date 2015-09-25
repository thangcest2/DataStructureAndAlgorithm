<?php

namespace StrategyDuck\FlyWithWings;
use \StrategyDuck\FlyBehavior;

class FlyWithWings implements FlyBehavior {
  public function fly() {
    echo 'I am flying' . PHP_EOL;
  }

} 