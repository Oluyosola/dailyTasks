<?php

function middleCharacter($string){
    $string_length = strlen($string);
    $middle = "";
    for($i = 0; $i<=$string_length; $i++){
       $middle = $i[0];
    }
    if ($string_length % 2 == 0){
return $string[0];
    }else{

    }
} middleCharacter("tope");
?>