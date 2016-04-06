<?php

//Zad3 - Ile razy dany ciag znakow występuje w jakimś podanym stringu.

function SlowoWSlowie ($glowneSlowo, $wycinek) { //$glowneSlowo, $wycinek ---> parametry funkcji.

    $dlugosc1 = strlen($glowneSlowo); //strlen ---> funkcja która liczy ilość znakow w stringu.
    $dlugosc2 = strlen($wycinek);
    $y = 0;
    
    for ($i=0; $i < $dlugosc1; $i++) {
        
        $x = substr($glowneSlowo, $i, $dlugosc2); //substr ---> funkcja pozwalająca wycinać dowolna ilość znaków ze stringu.

            if ($x == $wycinek) {
                $y+=1; 
            }      
    }
    
     switch ($y) { //switch - dla poszczególnych wartości zmiennej podaje co ma kod wywołać. To taki lepszy if-else.
                  
         case 0: // case - przypadek. Czyli w przypadku gdy $y=0 wyświetli poniższe echo.
             
             echo "\n" . ' W ciagu tesktowym ' . $glowneSlowo . ' wycinek ' . $wycinek . ' nie wystepuje.';
             break;
             
         case 1: //gdy $y=1 wyswietli to echo z pod spodu.
             
             echo "\n" . ' W ciagu tesktowym ' . $glowneSlowo . ' wycinek ' . $wycinek . ' wsytepuje ' . $y . ' raz.' . "\n";
             break;
             
         default: // gdy $y nie będzie się równać ani 1 ani 0 to "domyślnie" wyświetli to:
             
             echo "\n" . ' W ciagu tesktowym "' . $glowneSlowo . '" wycinek "' . $wycinek . '" wsytepuje ' . $y . ' razy.' . "\n";
             break;
        
     }

}

SlowoWSlowie('Konstantynopolitanczykowianeczka', 'an');  // 'Konstantynopolitanczykowianeczka', 'an' --> dowolne argumenty funkcji.