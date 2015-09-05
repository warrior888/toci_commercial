<?php

function ciagFibonacciego($liczba) {
    
    if ($liczba == 0) {
        return 0;
    } else if ($liczba == 1)  {
        return 1;
} else {

    return ciagFibonacciego($liczba-1)+ciagFibonacciego($liczba-2);
        
    }
    
}

echo ciagFibonacciego(2);

?>