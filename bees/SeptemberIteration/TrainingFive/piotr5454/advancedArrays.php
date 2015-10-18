<?php
//TABLICE ASOCJACYJNE

//tablice wielowymiarowe (tablica w tablicy)

//rekurencja - wywołanie funkcji wewnątrza samej siebie, POZWALA GŁEBIEJ WCHODZIĆ
//W TABLICE
//
//$human = array ();
//
//$human[''] = array(
//    'sex' => array('male' => man, 'female' => woman),
//    'imie' => piotr,
//    'nazwisko' => mlynczak
//);
//echo $contacts['sex']['imie']['nazwisko'] . "\n";
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


$contacts = array();

//praca, dom, znajomi

//array('qweniuqwe' => 12312, 2, 3, 4);

$contacts['home'] = array(
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
//
//$human; //male, osoba, name, surname,
//
//
//$human = array();
//$human['male'] = array();
//$human['male']['man'];
//$human['male']['woman'] = array();
//$human['male']['woman']['name'] = 'Mikołaj';
//$human['male']['woman']['surname'] = 'Król';

//var_dump($contacts);