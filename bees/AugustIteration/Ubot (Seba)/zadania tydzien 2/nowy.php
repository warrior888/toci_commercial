<?php
$slowo ='mama';

function PrzeliczLitery ($zmiennaSlowo){
  $litera = array();
 for ($i=0; $i < strlen($zmiennaSlowo); $i++){
  $litera = substr($zmiennaSlowo,$i,1);
  $liczyLitery[$litera] = substr_count ($zmiennaSlowo, $litera);

 }
 for($i=0; $i < count($liczyLitery); $i++){
   echo "literka: " . array_keys($liczyLitery)[$i] . " wystapila razy: ". $liczyLitery[array_keys($liczyLitery)[$i]];
 }
   //var_dump($liczyLitery);
}

PrzeliczLitery ($slowo);
