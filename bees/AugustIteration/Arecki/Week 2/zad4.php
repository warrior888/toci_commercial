<?php

//Zad4 - Zamień w tekscie pewien ciag znaków na inny, a reszte zostaw na swoim miejscu.


function ZamienWycinek ($text, $wycinek, $zamiennik) {
    
    return str_replace($wycinek,$zamiennik,$text); // str_replace(co_zamieniamy, na_co_zamieniamy, w_jakim_stringu)
    
}

echo ZamienWycinek('lalalol', 'la', 'heh');


//Zobaczcie ile się namęczył pod spodem, a to wszystko można osiągnąć funkcją str_replace()


/*
function ZamienWycinek ($text, $wycinek, $zamiennik) {

    $dlugoscTekstu = strlen($text);
    $dlugoscWycinka = strlen($wycinek);
    $dlugoscZamiennika = strlen($zamiennik);
        
     for ($i=0; $i < $dlugoscTekstu; $i++) {
        
        $x = substr($text, $i, $dlugoscWycinka);

            if ($x == $wycinek) {
                
                for ($j=0; $j < $dlugoscWycinka; $j++) {
                
                $text[$i+$j] = $zamiennik[$j];
                 
                }
            } 
    }
    
   echo "\n" . $text . "\n";

}

ZamienWycinek('lalalol', 'la', 'he'); */