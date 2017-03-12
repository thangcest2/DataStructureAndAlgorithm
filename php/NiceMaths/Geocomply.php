<?php

// you can write to stdout for debugging purposes, e.g.
// print "this is a debug message\n";

function solution($A) {
    if (empty($A)) {
        return -1;
    }
    $results = [];
    $count = count($A);

    for ($i = 0; $i < $count; $i++) {
        if ($i == 0) {
            if (array_sum($A) - $A[0] == 0) {
                $results[] = 0;
            }
        } else if ($i == $count - 1 && $count - 2 >= 0) {
            if (array_sum($A) - $A[$count - 2] == 0) {
                $results[] = $count - 1;
            }
        } else if (sumFromIndexToIndexOfArray($A, 0, $i - 1) == sumFromIndexToIndexOfArray($A, $i + 1, $count - 1)) {
            $results[] = $i;
        }
    }

    if (empty($results)) {
        return -1;
    }

    return array_rand($results);
}

function sumFromIndexToIndexOfArray($A, $from, $to) {
    $sum = 0;
    for ($i = $from; $i <= $to; $i++) {
        $sum += $A[$i];
    }
    return $sum;
}

$a = [-1, 3, -4, 5, 1, -6, 2, 1];

var_dump(solution($a));die;

