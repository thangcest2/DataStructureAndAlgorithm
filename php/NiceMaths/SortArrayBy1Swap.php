<?php
$_SERVER['XDEBUG_PROFILE'] = 1;
/**
 * @desc check whether an array can be sorted after 1 swap or not
 * This is only solution til now:
 *    Find the unusual value. Loop through from its index til end of array, find the smallest and farthest value. Swap them.
 *    Check array.
 *
 * @question Can we just observe the array, don't swap it ?
*/

function solution($A) {
  for ($i = 0; $i < count($A) - 1; $i++) {
    for ($j = $i + 1; $j < count($A); $j++) {
      if ($A[$i] > $A[$j]) {
        $index = $j;
        for ($k = $j; $k < count($A); $k++) {
          if ($A[$k] <= $A[$j]) {
            $index = $k;
          }
        }
        $temp = $A[$index]; $A[$index] = $A[$i]; $A[$i] = $temp;
        for ($q = $i+1; $q < count($A)-1; $q++)
          if ($A[$q]>$A[$q+1]){
            return false;
          }
        return true;
      }

    }
  }
  return true;
}

$A = [2,4,3,3,3,2,5]; // pos

// $A = [1, 3, 5, 3, 4];<!-- // impos-->
echo solution($A) ? 'posssible' : 'impossible';
echo PHP_EOL;

?>
