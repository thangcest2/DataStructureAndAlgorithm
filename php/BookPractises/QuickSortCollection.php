<?php
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
// $a = [43,22,20,21,23,25];
// $a = [9,8,7,6,5, 2, 1, 5, 7, 4, 12, 14];
$a = [38, 27, 63, 11, 45, 84, 1, 46, 33, 83,8,6,7,2,4,5,1,9,3,10];
quickSort3($a, 0, count($a)-1);
var_dump(implode(" -- ", $a));die;



?>
