<?php
/**
 * Date: 6/23/15
 * Time: 4:26 PM
 *
 */
define('MAX', 100);
define('N', 4);
define('M', 6);

$c = [[]]; // ma tran chi phi
$c[1][2] = 3;
$c[1][3] = 2;
$c[1][4] = 1;
$c[2][3] = 1;
$c[2][4] = 2;
$c[3][4] = 4;

//1-3-2-4-1  2+1+2+1

$free = [];//mang danh dau

for ($i = 1; $i<= N; $i++)
{
  $free[$i] = true;
  for ($j = 1; $j<= N; $j++) {
    if ($i==$j) {
      $c[$i][$j] = 0;
    }
    if (!isset($c[$i][$j])) {
      $c[$i][$j] = MAX;
    }
    $c[$j][$i] = $c[$i][$j];
  }
}


$x = $tong = $bw = [];
$x[1] = 1;
$tong[1] = 0;
$free[1] = false;
$minSpend = MAX*MAX;
nhanhcan(2, $c, $bw, $free, $tong, $x, $minSpend);
printRes($bw, $minSpend);

function nhanhcan($cityNo, &$c, &$bw, &$free, &$tong, &$x, &$minSpend) {
  for ($i=2;$i<=N;$i++) {
    if ($free[$i]) {
      $x[$cityNo] = $i;
      $tong[$cityNo] = $tong[$cityNo-1] + $c[$x[$cityNo-1]][$i];
      if ($tong[$cityNo] < $minSpend) {
        if ($cityNo < N) {
          $free[$i] = false;
          nhanhcan($cityNo+1, $c, $bw, $free, $tong, $x, $minSpend);
          $free[$i] = true;
        } else {
          if (($tong[$cityNo] + $c[$x[$cityNo]][1]) < $minSpend) {
            $bw = $x;
            $minSpend = $tong[$cityNo] + $c[$x[$cityNo]][1];
          }
        }
      }
    }
  }
}

function printRes($bw, $min) {
  echo PHP_EOL;
  echo 'Bestway:';
  for($i=1;$i<=N;$i++){
    echo $bw[$i] . '->';
  }
  echo $bw[1] . PHP_EOL;
  echo 'Minspending:' . $min. PHP_EOL;
}