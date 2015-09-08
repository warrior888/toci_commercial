<?php

function ciagFibonacciego($liczba) {
    
    if ($liczba < 2) {
     
        return $liczba;
        
    }
        else {
        
    return ciagFibonacciego($liczba-1)+ciagFibonacciego($liczba-2);
        
    }
    
}

echo ciagFibonacciego(12);

?>