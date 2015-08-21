<?php
/**
 * Date: 7/4/15
 * Time: 11:54 AM
 * @desc:
 * N < 100, find the string length N which satisify:
 * 2 continuously parts of string must be different
 * Have min letter C
 */

define('N', 10);

function same($X, $i, $l) {
  $j = $i - $l;
  for ($k=0;$k<= $l-1;$k++) {
    if ($X[$i - $k] !== $X[$j - $k]) {
      return false;
    }
  }
  return true;
}

function check($X, $i) {
  for ($l=1;$l<=(int)$i/2;$l++){
    if (same($X, $i, $l)) return false;
  }
  return true;
}

function keepRes($t, &$minC, $X, &$best) {
  $minC = $t[N];
  $best = $X;
}

function printRes($best, $minC) {
  echo 'Result String: ';
  for ($i=1;$i<=count($best);$i++){
    echo $best[$i];
  }
  echo PHP_EOL . 'C letter count: ' . $minC;
}

function dayABC($index, &$X ,&$t, &$minC, &$best ,$abc) {
  for ($j=0;$j<count($abc);$j++){
    $X[$index] = $abc[$j];
    if (check($X, $index)) {
      $t[$index] = ($abc[$j] == 'C') ? $t[$index-1] + 1 : $t[$index-1];
      if ($t[$index] + (int)(N-$index)/4 < $minC) {
        if ($index == N) {
          keepRes($t, $minC, $X, $best);
        } else {
          dayABC($index+1,$X,$t,$minC, $best, $abc);
        }
      }
    }
  }
}

$X = [];
$best = [];
$minC = N;
$t[0] = 0;
$abc = ['A','B','C'];
dayABC(1, $X, $t, $minC, $best, $abc);
printRes($best, $minC);
