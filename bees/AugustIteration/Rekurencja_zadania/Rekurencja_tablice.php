<?php

//  4! = 4*3*2*1 = 24
//  5! = 5*4*3*2*1 = 120
// 1! = 1
// 0! = 1;


function FactorialLoop($number) {
    // natrual number validation TODO

    if ($number > 1) { // > 1!
        $counter = 1; // 2 6 24 
        for ($i = 2; $i <= $number; $i++) { // ($i = $number ; $i > 1; $i--)
            $counter = $counter * $i;
        }
        return $counter;
    } else {
        return 1; // 0!, 1!
    }
}

echo FactorialLoop(5);

//Kod Piotrka

// 18 = 17 + 16
// 256 = 255 + 154

function CiagFibonacciego($wyrazCiagu)
{
    if($wyrazCiagu == 0)
    {
        return 0;
    }
    else if($wyrazCiagu < 3) // < 2
    {
        return 1;
    }
    else
    {
        
    }
}

function Silnia($liczba) {
    // 1
    if ($liczba > 1) {
        // echo $liczba."\n";
        // 120
        return $liczba * Silnia($liczba - 1);
    } else if ($liczba <= 1) {
        return 1;
    }
}

echo Silnia(5);

function FactorialRecursive($number) {
    if ($number > 1) {
//        echo $number."\n";
        return $number * FactorialRecursive($number - 1);
    }
    return 1;
}

echo FactorialLoop(5);

$example = array('AdrianK' => 
    array('Dzieci' => 
        array('Jas', 'Malgosia')), 'Arecki', 'Luk' => 
    array('telefon' => '724433021'), 'Pakoo', 'Sosza', 'Ubot' => 
    array('samochody' => array('Audi', 'BMW')));


//wyswietl dzieci AdrianaK (foreach)
//Wyswietl numer Luka [][]
//Wyswietl samochody Ubota (foreach)