function compareTriplets($a, $b) {
    $ap = 0;
    $bp = 0;
    
    foreach($a as $i => $v) {
        if ($v > $b[$i]) {
            $ap +=1;
        }
         if ($v < $b[$i]) {
            $bp +=1;
        }
    }
    
    return array($ap, $bp);

}