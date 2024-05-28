<?php

$a = array(2, 4, 7, 5, 3, 5, 8, 5, 1, 7);
$m = 4;
$k = 10;

function solution($a, $m, $k) {
    $c = count($a);
    $maxp = $c - $m + 1;
    $sum = 0;
    
    $i = 0;
    for ($i; $i < $maxp; $i++) {
        $arr = array_values(array_slice($a, $i, $m));

        $x = 0;
        $z = 0;
        for($x; $x < $m; $x++) {
            $y = 0;
            
            for ($y; $y < $m; $y++) {
                if ($y != $x && $arr[$x] + $arr[$y] == $k) {
                    echo $arr[$x] . ' : ' . $arr[$y] . ' : ' . ($arr[$x] + $arr[$y]) . PHP_EOL;
                    $z ++;
                }
            }
        }
        $sum  += round($z/2);
    }
    
    return $sum;
}
