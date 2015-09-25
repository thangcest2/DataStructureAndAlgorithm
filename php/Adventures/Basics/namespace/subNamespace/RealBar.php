<?php

namespace Thangtd\SubThangTd;
use Thangtd;

class RealBar extends Thangtd\ThangTdBar{
  public function __construct() {
    echo 'I am children bar' . PHP_EOL;
  }
} 