<?php
$slowo ='mama';

function PrzeliczLitery ($zmiennaSlowo){
 for ($i=0; $i < strlen($zmiennaSlowo); $i++){
  $litera = substr($zmiennaSlowo,$i,1);
  $liczyLitery = substr_count ($zmiennaSlowo, $litera);
    echo 'litera ' . $litera . ' wystepuje ' . $liczyLitery . ' razy' . "\n";
 }
}

PrzeliczLitery ($slowo);
