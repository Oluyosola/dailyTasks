<?php
function sequence($input){
    while ($input !=1){
        echo $input . " ";
    // for ($input = 1; $input > 1; $input){
if ($input % 2 == 0){
$input = $input / 2;
}else{
    $input = ($input * 3) + 1;
}

}
echo $input;
}
sequence(3);
?>