<?php

function ZamienWycinek ($text, $wycinek, $zamiennik) {

    $dlugoscTekstu = strlen($text);
    $dlugoscWycinka = strlen($wycinek);
    $dlugoscZamiennika = strlen($zamiennik);
    $z = '';
    
    
     for ($i=0; $i < $dlugoscTekstu; $i++) {
        
        $x = substr($text, $i, $dlugoscWycinka);

            if ($x == $wycinek) {
                
                for ($j=0; $j < $dlugoscWycinka; $j++) {
                
                $text[$i+$j] = $zamiennik[$j];
                 
                }
            } 
    }
    
   echo $text;

}

ZamienWycinek('lalalol', 'la', 'he');