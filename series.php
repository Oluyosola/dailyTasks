<?php
function series($n){
    
$a = 1;
$d = 3; 




$nthSeries = (1/($a+(($n-1)*$d)));
// for ($i = 0; $i >=1; $i++){
//  $answer = array_sum($nthSeries)
// 
return strval(number_format((float)$nthSeries, 2));

// }

}

echo series(4);


?>