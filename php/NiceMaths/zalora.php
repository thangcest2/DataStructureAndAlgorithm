<?php
///* Enter your code here. Read input from STDIN. Print output to STDOUT */
//echo "n: ";
//$n = trim(fgets(STDIN));
//$a = [];
//while ($n > 0) {
//    $a[] = trim(fgets(STDIN));
//    $n--;
//}
//echo array_sum($a);
$a = [2,3,10,2,4,15,1];

function maxDiff($a) {
    $l = count($a);
    $md = -1;
    for ($i = 0; $i < $l-1; $i++) {
        for ($j = 0; $j < $l; $j++) {
            if ($a[$i] < $a[$j] && ($a[$j] - $a[$i]) > $md) {
                $md = $a[$j] - $a[$i];
            }
        }
    }
    return $md;
}
echo maxDiff($a);
