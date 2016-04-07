<?php

function bd_strrev($str){
    $i = strlen($str);
    $string = '';
    for($i; $i>=0; $i--){
        $string .= $str[$i];
    }
    return $string;
}

echo bd_strrev('blazej');
echo "\n";