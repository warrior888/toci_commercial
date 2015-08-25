<?php

//Zad1 - Ile razy w podanym słowie wystepuję podana litera

function IleRazy ($slowo, $litera) {   // $slowo, $litera ---> parametry funkcji.
    
    $x=0;
    
    for ($i=0; $i < strlen($slowo); $i++) { //strlen ---> funkcja która liczy ilość znakow w stringu.
        
            if ($slowo[$i] == $litera) {
              $x+=1;  
            }  
    }
    
    if ($x !=0) {   // rownie dobrze mozna tu napisać if ($x) bo jeśli jest rozny od zera to odgornie wykona pierwszy blok kodu
    echo "\n" . 'Liczba liter "' . $litera . '" w slowie "' . $slowo . '" to: ' . $x . "\n";
    } else {
        echo 'Brak litery ' . $litera . ' w slowie ' . $slowo;
    }
        
}

IleRazy ('cokolwiek', 'o');  // 'cokolwiek', 'o' ---> dowolne argumenty funkcji