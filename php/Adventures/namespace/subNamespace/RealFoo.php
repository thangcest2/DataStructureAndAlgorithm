<?php

namespace Thangtd\SubThangTd;
use Thangtd;

class RealFoo extends Thangtd\ThangTdFoo{
  public function __construct() {
    echo 'I am children foo' . PHP_EOL;
  }
} 