<?php

// 123456789 => 214365879

function zamiana($string)
{
    $wynik = '';
    for($i=0; $i<strlen($string); $i+=2)
    {
        $wynik .= $string[$i+1] . $string[$i];        
    }//for
    return $wynik;
}//fun

echo zamiana('76116022020000000297991972');