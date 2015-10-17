<?php
//TABLICE ASOCJACYJNE

//tablice wielowymiarowe (tablica w tablicy)

//rekurencja - wywołanie funkcji wewnątrza samej siebie, POZWALA GŁEBIEJ WCHODZIĆ
//W TABLICE

$human = array ();

$human[''] = array(
    'sex' => array('male' => man, 'female' => woman),
    'imie' => piotr,
    'nazwisko' => mlynczak
);
echo $contacts['sex']['imie']['nazwisko'] . "\n";
//function RecursiveArraySearch($array)
//{
//    foreach ($array as $value) {
//        if (!is_array($value)) {
//            echo $value;
//        } else {
//            RecursiveArraySearch($value);
//        }
//    }
//}
//var_dump($contacts);