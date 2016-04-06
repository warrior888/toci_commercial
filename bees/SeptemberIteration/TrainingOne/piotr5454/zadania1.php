<?php

//Zainicjuj dwie zmienne liczbowe i napisz algorytm, który jeśli pierwsza z tych liczb 
//jest parzysta wyświetli sumę, różnice, iloczyn i iloraz tych liczb. 
//Wyniki mają być wyświetlone każdy w osobnej linii

$zmienna1 = 22;
$zmienna2 = 11;

// % - daje resztę z dzielenia

// 4 / 2 = 2 reszta 0
// 3 / 2 = 1 reszta 1
// 7 / 5 = 1 reszta 2

// === - sprawdza znak, typ (np. int, string)
// == - sprawdza znak
// = - przypisanie wartości do zmiennje

// . - łączy tekst
// \n - przejście do nowej linii

//trzeba napisać warunek który sprawdzi czy liczba jest parzysta
//[czy jest podzielna przez 2 i daje resztę z dzielenia równą 0 (w tym celu
//używamy operatora przyrównania)]

if($zmienna1 % 2 === 0) //jeśli zmienna1 daje resztę z dzielenia przez 2 równą 0 
                        //to jest liczbą parzystą, trzeba uważać aby operator
                        //przyrównania był właściwy żeby nie wyskoczył błąd
                        //echo wyśw. wynik
{
    echo $zmienna1 + $zmienna2 . "\n";
    echo $zmienna1 - $zmienna2 . "\n";
    echo $zmienna1 * $zmienna2 . "\n";
    echo $zmienna1 / $zmienna2 . "\n";
}
else
{ 
    echo "czesc";
}

$a = '2'; // znak = 2, typ = string
$b = 2; // znak = 2, typ = int

if($a == $b){
    echo "true";
} else {
    echo "false";
} 