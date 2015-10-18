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

<<<<<<< HEAD
$human = array();
$human['male'] = array();
$human['male']['man'] = array();
$human['male']['woman'] = array();
$human['male']['woman']['name'] = 'Mikołaj';
$human['male']['woman']['surname'] = 'Król';
=======

>>>>>>> 994493d15606833314a906ea4f54c145beef72c6

//var_dump($contacts);