<?php

namespace StrategyDuck;

class MuteQuack implements QuackBehavior {

  public function quack() {
    echo 'Mute!!!' . PHP_EOL;
  }

} 