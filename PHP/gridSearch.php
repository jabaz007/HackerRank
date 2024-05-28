<?php

function gridSearch($G, $P) {
    // Write your code here
	$found = false;
    $match = [];

    foreach ($G as $key => $g) {
        $location = 0;

        while (($position = strpos($g, $P[0], $location)) !== false) {
            if ($found) { break; }

            $match = [$key, $position];

            for ($i = 1, $j = $match[0] + 1; $i < count($P); $i ++, $j ++) {
                $position = strpos($G[$j], $P[$i], $location);

                if ($position === false || $position !== $match[1]) {
                    $found = false;
                    break;
                } else {
                    $found = true;
                }
            }

            $location ++;
        }
    }

    return $found ? 'YES' : 'NO';

}

