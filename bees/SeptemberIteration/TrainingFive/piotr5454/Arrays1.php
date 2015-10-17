<?php
//TABLICE ASOCJACYJNE

//tablice wielowymiarowe (tablica w tablicy)

//rekurencja - wywołanie funkcji wewnątrza samej siebie, POZWALA GŁEBIEJ WCHODZIĆ
//W TABLICE

$films = array ();

$contacts[''] = array(
    'mama' => array('private' => 56123421, 'work' => 21312312312),
    'tata' => 5122131231,
    'dziecko' => 213312312
);
echo $contacts['home']['mama']['private'] . "\n";
function RecursiveArraySearch($array)
{
    foreach ($array as $value) {
        if (!is_array($value)) {
            echo $value;
        } else {
            RecursiveArraySearch($value);
        }
    }
}
//var_dump($contacts);