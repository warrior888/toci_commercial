<?php

$osoba = array();

$kursPHP['uczestnicy'] = array(
    'plec' => 'kobieta',
    'dane osobowe' => array('imie i nazwisko' => 'Anna Siedlecka')
);

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

RecursiveArraySearch($osoba);

