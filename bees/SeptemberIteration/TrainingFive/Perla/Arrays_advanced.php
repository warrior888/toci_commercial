<?php

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

$human; //male, osoba, name, surname,


$human = array();
$human['male'] = array();
$human['male']['man'];
$human['male']['woman'] = array();
$human['male']['woman']['name'] = 'Mikołaj';
$human['male']['woman']['surname'] = 'Król';

//var_dump($contacts);