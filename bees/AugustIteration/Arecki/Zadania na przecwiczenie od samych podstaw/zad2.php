<?php

//Zad2 - Ile razy w danym stringu wystepują podane w nim litery.

function SprawdzSlowo ($slowo) { // $slowo ---> parametr funkcji.
    
    
    $alfabet = array ('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'r', 's', 't', 'u', 'w', 'x', 'y', 'z');
    
    for ($j=0; $j < count($alfabet); $j++) {
        
    $x=0;
        
    for ($i=0; $i < strlen($slowo); $i++) {  //strlen ---> funkcja która liczy ilość znakow w stringu
        
            if ( $slowo[$i] == $alfabet[$j] ) {
              $x+=1;  
            }  
}
     if ($x !=0) {
    echo 'Liczba liter "' . $alfabet[$j] . '" w slowie "' . $slowo . '" to: ' . $x . "\n";
    } 
       
}
    
}

SprawdzSlowo('konstantynopolitanczykowianeczka'); // 'konstantynopolitanczykowianeczka' ---> dowolny argument funkcji.