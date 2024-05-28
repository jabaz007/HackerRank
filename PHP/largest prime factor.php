<?php

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$t);
for($a0 = 0; $a0 < $t; $a0++){
    fscanf($handle,"%ld",$n);
    
    $pn = 2;
    while ($n % 2 == 0) {
        $n /= 2;
    }
    
    for ($flag = 3; $flag <= sqrt($n); $flag += 2) {
        while ($n % $flag == 0) {
            $pn = $flag;
            $n /= $flag;
        }
    }

    if ($n > 2) {
        $pn = $n;
    }
    
    echo $pn . PHP_EOL;
    
}

?>
