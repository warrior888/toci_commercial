<?php

function bd_strrev($str){
    $i = strlen($str);
    $string = '';
    for($i; $i>=0; $i--){
        $string .= $str[$i];
    }
    echo $string;
    echo "\n";


}

echo bd_strrev('blazej');