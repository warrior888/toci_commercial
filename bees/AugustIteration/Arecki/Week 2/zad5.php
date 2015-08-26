<?php

/* Zad5 - Napisać funkcję, która dla zadanego textu "ala ma kota" oraz parametru liczbowego np 3 zwraca tekst z co 3 literą wielką zamiast małej np. "alA mA kOta"*/

function zamienTekst ($tekst, $liczba) {
    
    for ($i=$liczba-1; $i < strlen($tekst); $i+=$liczba) {
    
        $tekst[$i] = strtoupper($tekst[$i]); // strtoupper ---> funckja "wbudowana w php" (funkcja globalna?, metoda obiektu globalnego string ?) zamieniająca małe litery na duże 
        
    }
    
    echo "\n" . 'Tekst zamieniony: ' . $tekst . "\n";

}

zamienTekst('ala ma kota', 3);