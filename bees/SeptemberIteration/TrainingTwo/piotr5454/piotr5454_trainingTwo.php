<?php
// ZADANIE 1
//Napisz funkcję, która z przedziału [a, b] wyświetli wszystkie liczby, których 
//reszta z dzielenia przez 2 LUB 5 wynosi 1 (pętla while). 
//Parametr b jest wymagany, a domyślnie wynosi 0.



function zadanie1($a, $b)
{
   $x=$a; 
    while ($x<=$b)
    {
        if ($x % 2 === 1)
        {
            echo $x."\n";
        }
        if ($x % 5 === 1)
        {
            echo $x. "\n";
        }
    $x++;
    }    
    
}
zadanie1('0','10');
echo "\n";


//ZADANIE 2
//Napisz funkcję, która x razy wywoła funkcję z zadania 1 (pomyśl dobrze jakie parametry 
//powinna przyjmować)
 
function powtorzenie($iloscwyswietlen)
{
    for($x = 0; $x <= $iloscwyswietlen; $x++)
    {
        echo zadanie1('0','10'). "\n";
    }
}

powtorzenie (2);


