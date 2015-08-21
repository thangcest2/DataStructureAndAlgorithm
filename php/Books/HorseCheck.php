<?php
/**
 * Date: 6/21/15
 * Time: 1:23 AM
 * @property madituan.php $madituan.php
 */

define('N', 5);
define('X', 3);
define('Y', 3);

function madituan(&$a, &$c, $n, $x, $y, &$count) {
  for ($i=1;$i<=N;$i++)
    for ($j=1;$j<=N;$j++){
      if (check($c, $i, $j, $x, $y)) {
        $a[$n] = [$i,$j];
        if ($n == N*N) {
          $count++;
          pri($a);
//          exit;
        } else {
          $c[$i][$j] = false;
          madituan($a,$c, $n+1,$i,$j, $count);
          $c[$i][$j] = true;
        }
      }
    }
}

function check($c, $x, $y, $baseX, $baseY) {
  if (((abs($baseX - $x) == 2 && abs($baseY-$y) == 1) || (abs($baseX - $x) == 1 && abs($baseY-$y) == 2)) && $c[$x][$y]) return true;
  return false;
}

function pri($a) {
  for ($i=1;$i<=N*N;$i++) {
    echo '{';
    echo $a[$i][0] . ',' . $a[$i][1];
    echo '}' . PHP_EOL;
  }
}

for ($i=1;$i<=N;$i++){
  for ($j=1;$j<=N;$j++){
    $c[$i][$j]= true;
  }
}

$count = 0;
$a = [];
$a[1] = [X,Y];
$c[X][Y] = false;
madituan($a, $c, 2, X, Y, $count);
echo '----> so cach di: '. $count;


