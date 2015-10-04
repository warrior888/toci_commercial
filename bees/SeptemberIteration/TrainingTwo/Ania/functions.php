<?php

//$sum = 0;
//for($j = 20; $j <= 30; $j++)
//{
//    echo $sum=$sum+$j."\n";
//}

//// --- FUNCTIONS ---
//
//function Example($counter)
//{
//    for($i = 0; $i <= $counter; $i++) {
//        if($i % 2 === 0) {
//            echo $i."\n";
//        }
//    }
//}
//
//Example(20); //wywołuje funkcję
//
//echo "\n";
//
//function Example1($min, $max)
//{
//    for($i = $min; $i <= $max; $i++) {
//        if($i % 2 === 0) {
//            echo $i."\n";
//        }
//    }
//}
//
//Example1(50, 60);
//
//echo "\n";
//
//// przypisanie wartości
//// dopisanya zostanie wartość do zmiennej, jeżeli ta nie zostanie podana
//
//function Pajacyk($slowko1, $slowko2 = 'ma psa'){
//    echo $slowko1 . " " . $slowko2 . "\n";
//}
//
//Pajacyk('Ala');
//Pajacyk('Ala', 'ma kota');

// Zadanie1
// Zainicjuj funkcje o swoim nicku, która przez określoną parametrem ilość razy wyświetli Hello World.

function Qba($iloscWyswietlen){
    for($i = 0; $i <= $iloscWyswietlen; $i++){
        echo "Hello world\n";
    }
}

Qba(5);

echo "\n";

// Zadanie2

function Toci2($imie, $nazwisko){
    echo $imie . " " . $nazwisko;
}

Toci2("Lukasz", "Majewski");

// Uwaga! można wywoływać funkcję wewnątrz innej funkcji.