<?php
/**
 * Date: 6/20/15
 * Time: 11:35 PM
 * @desc n < 30, Liệt kê all cách phân tích n số thành tổng các số nguyên > 0
 */

define('TONG', 6);

function tinhtong(&$a, &$t, $index) {
  for ($i=$a[$index-1];$i<=(int)((TONG-$t[$index-1])/2);$i++){
    $a[$index] = $i;
    $t[$index] = $t[$index-1] + $i;
    tinhtong($a,$t,$index+1);
  }
  $a[$index]= TONG-$t[$index-1];
  pri($a,$index);
}


function pri($a, $count) {
  echo TONG . '=';
  for ($i=1;$i<$count;$i++){
    echo $a[$i] . '+';
  }
  echo $a[$count].PHP_EOL;
}

$a=[];
$a[0] = 1;
$t[0] = 0;

tinhtong($a, $t, 1);