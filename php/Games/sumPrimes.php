<?php
//This code read the necessary data form the standard input
//$line contains the line of the input
//echo $line . "\n";
$timer = microtime(true);
$k = 5000;
function isPrimeNumber($n) {
  $m = (int)sqrt($n);
  for ($i=2;$i<=$m;$i++){
    if ($n%$i == 0) return false;
  }
  return true;
}

$sum = 0;
$init = 2;
while ($k !== 0) {
  if (isPrimeNumber($init)) {
    $sum+=$init;
    $k--;
  }
  $init++;
}
echo $sum . PHP_EOL;

echo microtime(true) - $timer;