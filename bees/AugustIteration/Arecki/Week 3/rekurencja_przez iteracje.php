<?php

    function rekurencja($liczba) {
        
        $wynik=1;
        
        if ($liczba>1) {
        
            for ($i=$liczba; $i>0; $i--) {
                $wynik = $wynik*$i;
            }
                echo 'Silnia z liczby ' . $liczba . ' to: '. $wynik;
            
        } else {
            echo 'Silnia z liczby ' . $liczba . ' to: '. $wynik;
        } 
    }

rekurencja(6);

?>