<?php
/**
 * Date: 9/27/15
 * Time: 3:00 PM
 * @property UCLN.php $UCLN.php
 * @desc: ước chung lớn nhất / Greatest common divisor
 */

function ucln($a, $b) {
  if ($a < $b) return ucln($b, $a);
  $t = $a % $b;
  if ($t == 0) return $b;
  return ucln($b, $t);
}

$a = 200;
$b = 120;
echo ucln($a, $b);



