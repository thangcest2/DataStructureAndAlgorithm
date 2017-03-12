<?php
/**
 * CreatedBy: thangcest2@gmail.com
 * Date: 8/30/16
 * Time: 9:07 AM
 */

var_dump(primeSum(11, 2));die;

function primeSum($n, $k) {
    if ($k == 0) {
        return false;
    }
    if ($k == 1) {
        return isPrimeNumber($n);
    }
    $primesOfN = getPrimesArrOfNumber($n);
    $singleResPlate = [];
    $flag = false;
    loop($n, $k, $primesOfN, $singleResPlate, $flag);
    return $flag;

}

function loop($n, $k, $primes, $resPlate, &$flag) {
    foreach ($primes as $i => $prime) {
        if ($n >= $prime) {
            $resPlate[$k] = $prime;
            if ($k == 1) {
                if ($n == array_sum($resPlate)) {
                    $flag = true;
                    return;
                }
            } else {
                loop($n, $k - 1, $primes, $resPlate, $flag);
            }
        }
    }

}

function isPrimeNumber($n) {
    if ($n <= 1) return false;
    $m = (int)sqrt($n);
    for ($i=2;$i<=$m;$i++){
        if ($n%$i == 0) return false;
    }
    return true;
}

function getPrimesArrOfNumber($n) {
    $res = [];
    for ($i = 2; $i <= $n; $i++) {
        if (isPrimeNumber($i)) {
            $res[] = $i;
        }
    }
    return $res;
}