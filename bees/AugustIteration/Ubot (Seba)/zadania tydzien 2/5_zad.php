<?php
//Zad5 - Napisać funkcję, która dla zadanego textu "ala ma kota" oraz parametru liczbowego np 3 zwraca tekst z co 3 literą wielką zamiast małej np. "alA mA kOta"

$string = "ala ma kota";

function EveryThirdToUpperCase ($string, $count){
    for ($i= $count - 1; $i < strlen($string); $i += $count){
        $string[$i] = strtoupper($string[$i]);

    }
    echo $string;
}
EveryThirdToUpperCase ($string, 3);
