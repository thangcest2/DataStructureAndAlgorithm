<?php

/**
 * @desc Another way of queen math
 * not yet finished.
*/

require 'Queens.php';

class Queens2 extends Queens{
  static $matrix = [];
  static $found = [];

  public static function init() {
    self::reset();
    self::queensOut(0);
  }

  public static function queensOut($x) {
    for ($y = 0; $y < SIZE; $y++) {
      if (self::$matrix[$x][$y]) {
        self::$found[$x] = $y;
        if ($x == SIZE-1) {
          parent::printResult(self::$found);
        } else {
          self::mark($x, $y, false);
          self::queensOut($x+1);
          self::mark($x, $y, true);
        }
      }
    }
  }

  public static function mark($x, $y, $as) {
    for($i=0;$i<SIZE;$i++) {
      //all box in row x are marked to $as
      //all box in col y are marked to $as
      self::$matrix[$i][$y] = self::$matrix[$x][$i] = $as;
      //all box in duongcheo1, duongcheo2 are marked to $as
      if (isset(self::$matrix[$x+$i][$y+$i])) {
        self::$matrix[$x+$i][$y+$i] = $as;
      }
      if (isset(self::$matrix[$x+$i][$y-$i])) {
        self::$matrix[$x+$i][$y-$i] = $as;
      }
      if (isset(self::$matrix[$x-$i][$y-$i])) {
        self::$matrix[$x-$i][$y-$i] = $as;
      }
      if (isset(self::$matrix[$x-$i][$y+$i])) {
        self::$matrix[$x-$i][$y+$i] = $as;
      }
    }

  }

  public static function reset() {
    for ($i=0;$i<SIZE;$i++) {
      for ($j=0;$j<SIZE;$j++) {
        self::$matrix[$i][$j] = true;
      }
    }
  }


}

Queens2::init();


