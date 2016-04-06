<?php

//echo $max;
//zainicjuj funkcje o swoim nicku, która poprzez określoną parametrem ilość razy wyświetli Hello World

function Example($min, $max = 320)
{

    for ($i = $min; $i <= $max; $i++) {
        if ($i % 2 === 0) {
            echo $i."\n";
        }
    }
}

function Toci2($imie, $nazwisko)
{
    Example(2, 10);
    echo "$imie $nazwisko";
}


Toci2("Lukasz", "Majewski");

