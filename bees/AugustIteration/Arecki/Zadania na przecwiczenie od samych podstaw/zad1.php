<?php

function IleRazy ($slowo, $litera) {
    
    $x=0;
    
    for ($i=0; $i < strlen($slowo); $i++) {
        
            if (substr($slowo,$i,1) == $litera) {
              $x+=1;  
            }  
    }
    
    if ($x !=0) {
    echo 'Liczba liter ' . $litera . ' to: ' . $x;
    } else {
        echo 'Brak litery ' . $litera;
    }
        
}

IleRazy ('cokolwiek', 'o');