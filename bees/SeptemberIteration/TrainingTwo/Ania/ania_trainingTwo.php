<?php

echo "Zadanie 1 \n\n";

//Napisz funkcję, która z przedziału [a, b] wyświetli wszystkie liczby, których reszta z dzielenia przez 2 LUB 5 wynosi 1
//(pętla while). Parametr b jest wymagany, a domyślnie wynosi 0.

function Wyswietl($b, $a = 0){
    $i = $a;
    $wynik = '';
    while($i <= $b){
        if($i % 2 === 1 || $i % 5 === 1){
            $wynik .= $i."\n";
        }
        $i++;
    }
    
    return $wynik;
}

echo Wyswietl(30);
echo "\n";
echo Wyswietl(30,10);
echo "\n";

echo "Zadanie 2 \n\n";

//Napisz funkcję, która x razy wywoła funkcję z zadania 1 (pomyśl dobrze jakie parametry powinna przyjmować).

function Powtorz($iloscWyswietlen){
    for($i = 0; $i <= $iloscWyswietlen; $i++){
        echo Wyswietl(10)."\n";
    }
}

Powtorz(3);