<?php

define('SIZE', (int)$argv[1]);

/**
 * @desc: Queen math. Recursive loop to get all possible results.
 * @pre: input size của chessboard.
 * @post: draw
*/

class Queens {
  public static $rows = [];
  public static $cols = [];
  public static $duongcheo1Marked = []; // TayNam-Dongbac == row+col == const
  public static $duongcheo2Marked = []; // TayBac-DongNam == row-col == const

  public static function init() {
    for ($x = 0; $x < SIZE; $x++) {
      self::$rows[$x] = $x;
    }
    for ($i = 0; $i < SIZE; $i++) {
      self::$cols[$i] = true;
    }
    for ($j = 0; $j < 2 * SIZE; $j++) {
      self::$duongcheo1Marked[$j] = true;
    }
    for ($k = -SIZE; $k < SIZE; $k++) {
      self::$duongcheo2Marked[$k] = true;
    }
    self::queensOut(0);
  }

  public static function queensOut($queenNo) {
    for ($queenRefCol = 0; $queenRefCol < SIZE; $queenRefCol++) {
      if (self::$cols[$queenRefCol] && self::$duongcheo1Marked[$queenRefCol+$queenNo] && self::$duongcheo2Marked[$queenNo-$queenRefCol]) {
        self::$rows[$queenNo] = $queenRefCol;
        if ($queenNo == SIZE-1) {
          self::printResult(self::$rows);
        } else {
          self::$cols[$queenRefCol] = self::$duongcheo1Marked[$queenRefCol+$queenNo] = self::$duongcheo2Marked[$queenNo-$queenRefCol] = false;
          self::queensOut($queenNo+1);
          self::$cols[$queenRefCol] = self::$duongcheo1Marked[$queenRefCol+$queenNo] = self::$duongcheo2Marked[$queenNo-$queenRefCol] = true;
        }
      }
    }
  }

  public static function printResult($res) {
    for($i=0;$i<SIZE;$i++) {
      echo '**********';
    }
    echo PHP_EOL;
    foreach ($res as $key => $val) {
      echo PHP_EOL;
      for($i=0;$i<SIZE;$i++) {
        echo ' -------- ';
      }

      echo PHP_EOL;
      $space = '';
      for ($t = 0;$t<$val;$t++){
        $space .= '          ';
      }
      echo $space . '  [' . $key . ',' . $val . ']';

      echo PHP_EOL;
    }
    echo PHP_EOL;
    for($i=0;$i<SIZE;$i++) {
      echo ' -------- ';
    }
    echo PHP_EOL;
  }

}

Queens::init();
?>



