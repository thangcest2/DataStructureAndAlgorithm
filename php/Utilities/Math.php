<?php

namespace Utilities;

class Math
{
    public static function average(Array $a)
    {
        return array_sum($a) / count($a);
    }


}