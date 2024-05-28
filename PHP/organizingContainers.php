<?php

function organizingContainers($container) {
    // Write your code here
    $res=0;
      
    for ($i=0; $i<count($container);$i++){
        $row=0; $col=0;
        for($f=0; $f< count($container);$f++){
            $row+=$container[$i][$f];
            $col+=$container[$f][$i];
        }
        $res ^= $row ^ $col;
        
    }
    return $res===0 ? 'Possible' : 'Impossible';
}