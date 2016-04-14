<?php
//Tablice
//###############################################################
    $tablica = array('Bartek', 'Ala', 'Marek', 'Weronika', 'Tomek');
    $dlugosc = sizeof($tablica);

    echo $dlugosc;
    echo "\n";
    echo $tablica[4];
    $tablica[4] = 'Jarek';
    echo "\n_______________";

    for($i = 0; $i < $dlugosc; $i++)
    {
        echo "\n".$tablica[$i]."\n";
    }

    echo "\n_______________";
    $tablica[] = 'Staszek'; // dodanie wartosci
    //$tablica[] = $tablica;
    for($i = 0; $i < sizeof($tablica); $i++)
    {
        echo "\n".$tablica[$i]."\n";
    }
    echo "\n";

    var_dump($tablica);

    echo "\n\n__________________________\n\n";\

//###############################################################
//zadanie
//###############################################################

    function palindrom($text)
    {
        if(strrev($text) == $text)
        {
            return 'Tak';
        }
        else
        {
            return 'Nie';
        }
    }

    $tablica2 = array('KajaK', 'Wojownik', 'Rower', 'RadaR');
    $dlugosc2 = sizeof($tablica2);
    for($i = 0; $i < $dlugosc2; $i++)
    {
        echo "\n Czy tekst ".$tablica2[$i]." jest palindromem: ".palindrom($tablica2[$i])."\n";
    }
