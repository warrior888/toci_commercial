<?php
// ZADANIE 1
//Napisz funkcję, która z przedziału [a, b] wyświetli wszystkie liczby, których 
//reszta z dzielenia przez 2 LUB 5 wynosi 1 (pętla while). 
//Parametr b jest wymagany, a domyślnie wynosi 0.


function zadanie1($a, $b)
{
    while ($a<=$b)
    {
        if ($a % 2 === 1)
        {
            echo $a."\n";
        }
        if ($a % 5 === 1)
        {
            echo $a. "\n";
        }
    $a++;
    }    
    
}
zadanie1('0','10');

//ZADANIE 2
//Napisz funkcję, która x razy wywoła funkcję z zadania 1 (pomyśl dobrze jakie parametry 
//powinna przyjmować).

