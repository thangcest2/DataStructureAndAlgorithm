<?php
/**
 * CreatedBy: thangcest2@gmail.com
 * Date: 8/30/16
 * Time: 10:02 AM
 */

function leapYear($year) {
    $a = $year % 4;
    if ($a == 0) {
        $year = (int) ($year / 4);
        return $year % 25 !== 0 || $year % 100 == 0;
    }
    return false;
}


var_dump(leapYear(2000));die;