<?php
function feast($animal, $dish){
    if (
        $animal[0]== $dish[0] && substr($animal,-1) == substr($dish, -1) 
        ){
    return "true";
    }else{
        return "false";
    }

}
echo feast("tte of a traite", "tat");
?>