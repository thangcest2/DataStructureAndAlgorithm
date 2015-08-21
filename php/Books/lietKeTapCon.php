<?php
/**
 * Date: 6/13/15
 * Time: 5:12 AM
 * @desc Liệt kê tất cả các tập con K phần tử của tập S{1..n}
 */

define('N', 4);
define('K', 2);

$a = [0=>0,1=>1,2=>2,3=>3,4=>4];
$b = [];

function dequi($a,$index) {
  for($i=$a[$index-1]+1;$i<=N-K+$index;$i++){
    $a[$index]=$i;
    if ($index == K){
      printRes($a);
    } else {
      dequi($a,$index+1);
    }
  }
}

function printRes($b){
  var_dump($b);
  echo '{';
  for($i=1;$i<=K;$i++){
    echo $b[$i] . ',';
  }
  echo '};  ';
}

dequi($a, 1);
