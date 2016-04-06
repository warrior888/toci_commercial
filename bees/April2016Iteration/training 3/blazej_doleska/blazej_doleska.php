<?php

function bd_strrev($str){
    $i = strlen($str);
    for($i; $i>=0; $i--){
        $string .= $str[$i];
    }
    echo $string;
}

echo bd_strrev('blazej');