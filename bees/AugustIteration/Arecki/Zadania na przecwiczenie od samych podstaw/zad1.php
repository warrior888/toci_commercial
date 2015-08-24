<?php

function IleRazy ($slowo, $litera) {
    
    $x=0;
    
    for ($i=0; $i < strlen($slowo); $i++) {
        
            if ($slowo[$i] == $litera) {
              $x+=1;  
            }  
    }
    
    if ($x !=0) {
    echo 'Liczba liter ' . $litera . ' w slowie ' . $slowo . ' to: ' . $x;
    } else {
        echo 'Brak litery ' . $litera . ' w slowie ' . $slowo;
    }
        
}

IleRazy ('cokolwiek', 'o');