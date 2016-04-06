<?php

// --- TABLICA ---

$imie = 'ania'; // zmienna typu string (tekstowego), ale również tablica

//echo $imie[0] . $imie[1] . $imie[2] . $imie[3]; // ania
//echo "\n";
//echo $imie[3] . $imie[2] . $imie[1] . $imie[0]; // aina

// --- TABLICA ASOCJACYJNA ---

$tabAsocjacyjna = array('a' => 18, 'b' => 14, 'beata' => 'text'); // klucz 'a' ma wartość 18, itd.
var_dump($tabAsocjacyjna); // var_dump - pokazuje co jest w tablicy asocjacyjnej

// nanosimy zmianę do naszej tablicy, do klucza 'a' przypisujemy 'ala ma kota'
$tabAsocjacyjna['a'] = 'ala ma kota';
var_dump($tabAsocjacyjna);

// kolejne zmiany na kluczu 'a'
$zmienna = 'a';
$tabAsocjacyjna[$zmienna] = 'ala ma psa';
var_dump($tabAsocjacyjna);

// mogę wstawić do 'a' tablicę
// np. wtedy można stworzyć drzewo genealogiczne
$tabAsocjacyjna[$zmienna] = array('a' => 18, 'b' => 14, 'beata' => 'text');
var_dump($tabAsocjacyjna);

// jak się dobrać do tablicy asocjacyjne, która leży w innej tablicy asocjacyjnej?
// indeksujemy podwójnie
echo $tabAsocjacyjna['a'][$zmienna]; // tzn. [a] => [a] => 18
echo "\n";
echo $tabAsocjacyjna['a']['beata']; // tzn. [a] => [beata] => 'text'