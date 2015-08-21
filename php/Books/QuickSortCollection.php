<?php

//$a = [1,6,4,44,44,43,45,46,535,4343,232];
$a = [43,22,23,25];

function quickSort(&$a, $i, $j)
{
$middle =(int)(($i+$j) / 2);
  if ($i<$j){

  }
    quickSort($a,$i,$middle);
    quicksort($a,$middle+1,$j);
}
//$a = [22,23, 9,25];
//$a = [1,6,4,8,9,9,43,9,22,9,9,23,9,25];
//quickSort($a,0,count($a)-1);
//var_dump($a);die;
//
function pri($a){
  $s = '';
  foreach($a as $t){
    $s.=$t . '.';
  }
  return $s;
}
//quickSort($a, 0, count($a)-1);
//var_dump($a);die;

function quickSort2(&$a, $start, $end) {
  if ($start < $end) {
    $middle = (int)(($start + $end)/2)+1;
    $i = $start;
    $j = $end;
    while ($i <= $j) {
      while ($a[$i] < $a[$middle]) $i++;
      while ($a[$j] > $a[$middle]) $j--;
      if ($i<$j){
        $temp = $a[$i];
        $a[$i] = $a[$j];
        $a[$j] = $temp;
      }
      $i++;
      $j--;
    }
    quickSort2($a, $start, $j);
    quickSort2($a, $i, $end);
  }
}

$a = [1,6,4,8,9,9,43,9,22,9,9,23,9,25];
//$a = [22,23, 9,25];
//quickSort2($a,0,count($a)-1);
//var_dump($a);die;
//
function quicksort3(&$a, $start, $end) {
  if ($start < $end) {
    $middle = (int)(($start+$end)/2);
    $p = $a[$middle];
    $i = $start;
    $j = $end;
    while ($i <= $j) {
      while ($a[$i] < $p) $i++;
      while ($a[$j] > $p) $j--;

      if ($i<=$j) {
        if ($i<$j){
          $temp = $a[$i];
          $a[$i] = $a[$j];
          $a[$j] = $temp;
        }
        $i++;
        $j--;
      }

    }

    quicksort3($a,$start,$j);
    quicksort3($a,$i,$end);
  }

}
$a = [43,22,20,21,23,25];
quickSort3($a, 0, count($a)-1);
var_dump($a);



?>
