<?php
/**
 * Date: 9/30/15
 * Time: 5:38 PM
 * Sắp xếp chọn
 *
 * @property SortSelection.php $SortSelection.php
 *
 */

require 'SortCommon.php';

class SelectionSort extends SortCommon {
  public static function sort() {
    $a     = parent::$a;
    $count = count($a);
    for ($i = 0; $i < $count - 1; $i++) {
      $jMin = $i;
      for ($j = $i + 1; $j < $count; $j++) {
        if ($a[$j] < $a[$jMin]) {
          $jMin = $j;
        }
      }
      if ($jMin !== $i) {
        $temp     = $a[$i];
        $a[$i]    = $a[$jMin];
        $a[$jMin] = $temp;
      }
    }

    echo implode(' ', $a);
  }

  public static function sort2() {
    $a     = parent::$a;
    $count = count($a);
    for ($i = 0; $i < $count - 1; $i++) {
      $min = $a[$i];
      for ($j = $i + 1; $j < $count; $j++) {

      }
    }
  }

}

SelectionSort::sort();
