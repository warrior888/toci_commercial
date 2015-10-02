<?php

//Zad4 - Zamień w tekscie pewien ciag znaków na inny, a reszte zostaw na swoim miejscu.

function ZamienWycinek ($text, $wycinek, $zamiennik) {
    
    $dlugoscTekstu = strlen($text);
    $dlugoscWycinka = strlen($wycinek);
    
        
     for ($i=0; $i < $dlugoscTekstu; $i++) {
        
        $x = substr($text, $i, $dlugoscWycinka);

            if ($x == $wycinek) {
                
             $tekscior[] = $zamiennik;
                $i = $i + $dlugoscWycinka - 1;
                 
                } else {
            
                $tekscior[] = $x[0];
                
            }
         
            }
    
    for ($j=0; $j < count($tekscior); $j++) {
    
   echo  $tekscior[$j];
        
    }

}

ZamienWycinek('lalalol', 'la', 'heh');

/*
function ZamienWycinek ($text, $wycinek, $zamiennik) {
    
    return str_replace($wycinek,$zamiennik,$text); // str_replace(co_zamieniamy, na_co_zamieniamy, w_jakim_stringu)
    
}

echo ZamienWycinek('lalalol', 'la', 'heh');
*/
