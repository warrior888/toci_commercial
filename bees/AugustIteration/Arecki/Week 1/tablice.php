<?php

    $text = 'Arecki';  
    $s = strlen($text)-1;

    for ($i = $s ; $i >= 0  ; $i--) {
         echo $text[$i];
         echo '    ';
    } 
?>