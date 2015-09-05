<?php

function silnia($liczba) {

    if ($liczba > 1) {
        
    return $liczba * silnia($liczba-1);
        
    }
        return 1;
}

echo silnia(6);

?>