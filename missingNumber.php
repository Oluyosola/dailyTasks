<?php
function twoNum($nums, $target){
    // foreach ($nums as $num){
        $twoNumbers = [];
        $num = count($nums);
for ($i=0 ; $i<=$num; $i++){
    for ($j=0; $j<=$num; $j++){
if ($num[$i] + $num[$j] == $target ){
    // $twoNumbers =$num[$i] . $num[$j];
    return $twoNumbers;

}
    }
}

}

// }
$num = array (1,2,4,5,7,8);
 echo twoNum($num, 5);
// echo "name";
?>