<?php

//Zad4 - Zamień w tekście pewien ciąg znaków na inny, a reszte zostaw na swoim miejscu. "(mama, ma, ta) ---> wynik= "tata"
$slowo = 'mama';
$wymienZ ="ma";
$wymienNa = "ta";

$getFirstLetter = substr($wymienZ,0,1);

function LiczLitery ($zmiennaSlowo, $zmiennaLitera){
$liczbaLiter = 0;
$stringEcho = ' razy.';
$nextLetter = "";
    for ($i=0; $i < strlen($zmiennaSlowo); $i++) {

        $stringBefore = substr($zmiennaSlowo,0,$i);
        echo $stringBefore;

        if (substr($zmiennaSlowo,$i,1) == $zmiennaLitera) {
            $isItSame = $zmiennaSlowo[$i] . $zmiennaSlowo[$i++];

            if ( $isItSame == $wymienZ){
                $wymienZ = $wymienNa;

            }
            else{
                $nextLetter = substr($zmiennaSlowo,$i++,1);
            }
        }
    }
}


LiczLitery ($slowo, $getFirstLetter);
