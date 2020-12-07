<?php
function acronymGenerator($word){
   $word = explode(" ", $word);
   $acronym = "";
   foreach ($word as $w){
     echo  $acronym =strtoupper( $w[0]);
       
      }
}
 acronymGenerator("Tope is a boy");

?>