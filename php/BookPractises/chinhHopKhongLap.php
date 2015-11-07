<?php
/**
 * Date: 6/20/15
 * Time: 9:12 PM
 *
 * @desc Liệt kê các chỉnh hợp không lặp chập k của dãy n số từ 1 -> n
 */

define('N', 3);
define('K', 2);

function recursive($a, $index, &$c) {
  for ($i=1;$i<=N;$i++){
    if ($c[$i-1]) {
      $a[$index] = $i;
      if ($index == K-1) {
        printRes($a);
      } else {
        $c[$i-1] = false;
        recursive($a, $index+1, $c);
        $c[$i-1] = true;
      }
    }
  }
}

function printRes($b){
  echo '{';
  for($i=0;$i<K;$i++){
    echo $b[$i] . ',';
  }
  echo '};  ';
}

$a = $c = [];
for ($i=0;$i<N;$i++){
  $c[$i] = true;
  $a[$i] = $i+1;
}


recursive($a, 0, $c);
