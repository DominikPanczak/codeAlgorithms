<?php

// BruceForce - przykład praktycznie nie optyamalny




function findPairs($n)
{
    $map = [];
    $countFindPairs = 0;
    $start = microtime(true);
    for ($a = 1; $a <= $n; $a++) {
        $pow_a = pow($a, 3);
        for ($b = $a; $b <= $n; $b++) {
            $sum = $pow_a + pow($b, 3);

            if (!isset($map[$sum])) {
                $map[$sum] = [$a, $b];
            } else {
                $countFindPairs++;
                // Znaleziono pasującą parę
                //$pair = $map[$sum];
                //print_r( "SUMA: {$sum}, a: {$pair[0]}, b: {$pair[1]}, c: $a, d: $b\r");
            }
        }
    }
    $end = microtime(true);
    print_r($countFindPairs);
    $time = $end - $start;
    print_r("Czas wykonania algorytmu: " . $time . " sekund");

}

findPairs(1000);