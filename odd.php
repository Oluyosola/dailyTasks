<?php
$name = $_POST['name'];
$number = $_POST['number'];



    if (($number % 2 == 0) && ($number <=1000)){
        echo $name. "You entered an Even Number";
    }elseif(($number % 2 == 1) && ($number <=1000)){
        echo $name ."   " ."you entered odd number";
}else{
    echo "kindly enter a number between 1- 1,000";
}

echo str_word_count($name);
function top(){
    
}

?>