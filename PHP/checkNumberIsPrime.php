<?php
$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */

$n = fgets($_fp);
$i = 0;

for($i; $i<$n; $i++) {
    $num = fgets($_fp);
    
   if ($num == 1) {
        echo 'Not prime' . PHP_EOL;
        $prime = false;
        continue;
    }
    
    $p = sqrt($num);
    $f = 2;
    for($f; $f<=$p; $f++) {
        if ($num % $f == 0) {
            echo 'Not prime' . PHP_EOL;
            continue 2;
        }
    }
    
    echo 'Prime' . PHP_EOL;
    
}
