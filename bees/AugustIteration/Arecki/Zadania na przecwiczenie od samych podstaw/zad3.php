<?php

function SlowoWSlowie ($glowneSlowo, $wycinek) {

    $dlugosc1 = strlen($glowneSlowo);
    $dlugosc2 = strlen($wycinek);
    $y = 0;
    
    for ($i=0; $i < $dlugosc1; $i++) {
        
        $x = substr($glowneSlowo, $i, $dlugosc2);

            if ($x == $wycinek) {
                $y+=1; 
            }      
    }
    
     switch ($y) {
                  
         case 0: 
             echo "\n" . ' W ciagu tesktowym ' . $glowneSlowo . ' wycinek ' . $wycinek . ' nie wystepuje.';
             break;
         case 1: 
             echo "\n" . ' W ciagu tesktowym ' . $glowneSlowo . ' wycinek ' . $wycinek . ' wsytepuje ' . $y . ' raz.' . "\n";
             break;
         default: 
             echo "\n" . ' W ciagu tesktowym "' . $glowneSlowo . '" wycinek "' . $wycinek . '" wsytepuje ' . $y . ' razy.' . "\n";
             break;
        
     }

}

SlowoWSlowie('Konstantynopolitanczykowianeczka', 'an');