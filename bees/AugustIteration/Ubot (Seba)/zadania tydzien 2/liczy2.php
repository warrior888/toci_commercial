<?php
$slowo ='mama';

function PrzeliczLitery ($zmiennaSlowo){
$tablica = array ();

 for ($i=0; $i < strlen($zmiennaSlowo); $i++){
  $litera = $zmiennaSlowo[$i];
  if (isset($tablica[$litera])) {
    $tablica[$litera]++;
  }
  else {
  $tablica[$litera] = 1;
  }


  //$liczyLitery = substr_count ($zmiennaSlowo, $litera);
  //  echo 'litera ' . $litera . ' wystepuje ' . $liczyLitery . ' razy' . "\n";
 }
 foreach ($tablica as $litera => $i){
 echo 'litera ' . $litera . ' wystepuje ' . $i . ' razy' . "\n";
 var_dump($tablica);
 }
}

PrzeliczLitery ($slowo);
