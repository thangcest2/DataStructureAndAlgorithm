<?php
/**
 * Date: 6/15/15
 * Time: 11:44 PM
 * @description liet ke tap con cua day tang ko lien tiep
 */

define('N', 5);
define('K', 2);

$a = [1,3,5,7,9];

function dequi($a, $index, $from) {
  for ($i=$index+$from;$i<N-K+$index+1;$i++){
    $a[$index] = $a[$i];
    if ($index == K-1) {
      printRes($a);
    } else {
      dequi($a, $index+1, $from);
    }
    $from+=1;
  }
}

function printRes($b){
  echo '{';
  for($i=0;$i<K;$i++){
    echo $b[$i] . ',';
  }
  echo '};  ';
}

$a[-1] = 0;
dequi($a, 0, 0);