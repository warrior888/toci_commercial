<?php

echo "\n".'Zadanie1'."\n";

function Even ($a, $b = 0){
    $i = $b;
    while($i <= $a ){
    if ($i % 2 === 1 || $i % 5 === 1){
        echo $i."\n";
        }  
        $i++;
    }
}
Even(10);

echo "\n".'Zadanie2'."\n";

function Call ($number){
   
    for ($i = 0; $i <= $number - 1; $i++) {
        echo Even(10)."\n";
    }
}

Call(5);