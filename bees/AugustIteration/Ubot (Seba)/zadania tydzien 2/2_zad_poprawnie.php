<?php
//Zad2 - Ile razy w danym stringu występują podane w nim litery. ('polska') --> wynik: p:1, o:1, l:1
$slowo ='konstantynopolita';

function PrzeliczLitery ($Slowo){
$tablica = array ();

 for ($i=0; $i < strlen($Slowo); $i++){
  //$litera = $Slowo[$i];
  if (isset($tablica[$Slowo[$i]])) {
    $tablica[$Slowo[$i]]++;
  }
  else {
  $tablica[$Slowo[$i]] = 1;
  }


  //$liczyLitery = substr_count ($zmiennaSlowo, $litera);
  //  echo 'litera ' . $litera . ' wystepuje ' . $liczyLitery . ' razy' . "\n";
 }
 foreach ($tablica as $Slowo[$i] => $i){
 echo 'litera ' . $Slowo[$i] . ' wystepuje ' . $i . ' razy' . "\n";
// var_dump($tablica);
 }
}

PrzeliczLitery ($slowo);
