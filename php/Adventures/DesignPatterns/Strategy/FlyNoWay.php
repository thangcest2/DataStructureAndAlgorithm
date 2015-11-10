<?php

namespace StrategyDuck;

class FlyNoWay implements FlyBehavior {

  public function fly() {
    echo 'I can not fly' . PHP_EOL;
  }

} 