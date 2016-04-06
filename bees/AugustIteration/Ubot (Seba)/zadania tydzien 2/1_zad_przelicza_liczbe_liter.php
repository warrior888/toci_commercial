<?php
//Zad1 - Ile razy w podanym słowie występuje podana litera ('polska', 'p') --> wynik: 1.
$slowo = 'konstantynopolitańczykowianeczka';
$litera = 'a';

function LiczLitery ($zmiennaSlowo, $zmiennaLitera){
$liczbaLiter = 0;
$stringEcho = ' razy.';
  for ($i=0; $i < strlen($zmiennaSlowo); $i++) {

    if (substr($zmiennaSlowo,$i,1) == $zmiennaLitera) {
    $liczbaLiter++;
    }
  }
  if ($stringEcho == 0) {
  $stringEcho = ' raz.';
  }
  if ($liczbaLiter != 0){
  echo 'W slowie ' . $zmiennaSlowo . ' litera: ' . $zmiennaLitera . ' wystepuje ' . $liczbaLiter . $stringEcho;
  }
  else{
    echo 'W slowie ' . $zmiennaSlowo . ' litera: ' . $zmiennaLitera . ' nie wystepuje.';
  }
}

LiczLitery ($slowo, $litera);
