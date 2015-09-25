<?php

namespace StrategyDuck;

class FlyWithRocketPowerred implements FlyBehavior {

  public function fly() {
    echo 'Wow Rocked Powerred, I can fly now' . PHP_EOL;
  }

} 