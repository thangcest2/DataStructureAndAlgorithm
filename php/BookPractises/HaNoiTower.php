<?php
/**
 * Date: 9/26/15
 * Time: 1:50 PM
 * @property HaNoiTower.php $HaNoiTower.php
 */

function moveDisk($n, $x, $y) {
  if ($n == 1) {
    echo "Move 1 disk from " . $x . " To " . $y;
    echo PHP_EOL;
  } else {
    moveDisk($n-1,$x,6-$x-$y);
    moveDisk(1,$x,$y);
    moveDisk($n-1,6-$x-$y,$y);
  }
}

moveDisk(6, 1, 2);