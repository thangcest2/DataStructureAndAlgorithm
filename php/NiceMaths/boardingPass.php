<?php
define('MAX', 100);

$boardingPasses = [];
$depature = 'depature_0';
$arrival = 'arrival_2';
$i = 0;

while ($i !== MAX) {
    $boardingPasses[$i] = [
        'Departure' => $depature,
        'Arrival' => $arrival,
    ];

    $depature = $arrival;
    $arrival = 'arrival_' . (MAX + $i);

    $i++;
}


function getFinal($boardingPasses, &$r)
{
    $depatures = array_map(function ($a) use ($boardingPasses) {
        return $a['Departure'];
    }, $boardingPasses);

    foreach ($boardingPasses as $i => $boardingPass) {
        if (!in_array($boardingPasses[$i]['Arrival'], $depatures)) {
            $mark = $boardingPasses[$i];
            unset($boardingPasses[$i]);
            $r[] = $mark;

            if (count($boardingPasses) !== 0) {
                return getFinal($boardingPasses, $r);
            }
        }
    }
}

$r = [];

$boardingPasses = array_reverse($boardingPasses);

$s = microtime(true);
getFinal($boardingPasses, $r);
$r = array_reverse($r);


print_r(microtime(true) - $s);
echo  PHP_EOL;
die;
