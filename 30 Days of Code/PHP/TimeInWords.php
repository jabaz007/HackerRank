function timeInWords($h, $m) {
    // Write your code here
echo $h . ' : ' . $m;
    $out = '';
    $hm = array("zero", "one", "two", "three", "four", "five", "six", "seven", "eight", "nine", "ten", "eleven", "twelve", "thirteen", "fourteen", "fifteen", "sixteen", "seventeen", "eighteen", "ninteen", "twenty", "twenty one", "twenty two", "twenty three", "twenty four", "twenty five", "twenty six", "twenty seven", "twenty eight", "twenty nine", "thirty", "thirty one", "thirty two", "thirty three", "thirty four", "thirty five", "thirty six", "thirty seven", "thirty eight", "thirty nine", "fourty", "fourty one", "fourty two", "fourty three", "fourty four", "fourty five", "fourty six", "fourty seven", "fourty eight", "fourty nine", "fifty", "fifty one", "fifty two", "fifty three", "fifty four"," fifty five", "fifty six", "fifty seven", "fifty eight", "fifty nine", "sixty");
    
   switch ($m) {
       case 0:
           $out = $hm[$h] . " o' clock";
       break;
       case 15:
           $out = "quarter past " . $hm[$h];
       break;
       case 30:
           $out = "half past " . $hm[$h];
       break;
       case 45:
           $out = "quarter to " . $hm[$h + 1];
       break;
       default:
           if ($m < 30) {
               $out = $hm[$m] . ($m < 10 ? " minute" : " minutes") . " past " . $hm[$h];
           };
           
           if ($m > 30) {
               $out = $hm[(60 - $m)] . ($m < 10 ? " minute" : " minutes") . " to " . $hm[$h + 1];
           };
       break;
   }
    
     return $out;
}