<?php
/**
 * Date: 6/13/15
 * Time: 4:02 AM
 * @desc List all binary chain(0,1) have length = n
 */
define('n', 5);

function work(&$a, $k) {
  for ($i=0;$i<=1;$i++) {
    $a[$k] = $i;
    if ($k == n-1) {
      printRes($a);
    } else {
      work($a, $k+1);
    }
  }
}

function printRes($a) {
  for ($i=0;$i<n;$i++){
    echo $a[$i];
  }
  echo PHP_EOL;
}

echo PHP_EOL;
$a = [];
work($a, 0);