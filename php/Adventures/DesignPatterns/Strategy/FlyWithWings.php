<?php

namespace StrategyDuck;

class FlyWithWings implements FlyBehavior {
  public function fly() {
    echo 'I am flying' . PHP_EOL;
  }

} 