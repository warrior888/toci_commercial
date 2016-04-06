<?php

//Zad2 - Ile razy w danym stringu występują podane w nim litery. ('polska') --> wynik: p:1, o:1, l:1

$slowo ='mama';

function PrzeliczLitery ($zmiennaSlowo){
 for ($i=0; $i < strlen($zmiennaSlowo); $i++){
  $litera = substr($zmiennaSlowo,$i,1);
  $liczyLitery = substr_count ($zmiennaSlowo, $litera);
    echo 'litera ' . $litera . ' wystepuje ' . $liczyLitery . ' razy' . "\n";
 }
}

PrzeliczLitery ($slowo);
