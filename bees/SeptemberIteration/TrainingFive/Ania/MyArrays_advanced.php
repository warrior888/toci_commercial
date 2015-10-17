<?php

$contacts = array();

$contacts['home'] = array(
    'mama' => array('private' => 123123123, 'work' => 111222111),
    'tata' => 222333444,
    'dziecko' => 333444555
);

//var_dump($contacts); // -> wyświetlamy wszystko co jest w tablicy $contacts

//echo $contacts['home']['mama']['private']; // -> wyświetli nr prywatny mamy

//rekurencja
// w RecursiveArraySearch wchodzimy coraz głębiej w tablice...
// ... i wyświetlamy wszystkie elementy, które tablicą nie są
function RecursiveArraySearch($array)
{
    foreach ($array as $value) {
        if (!is_array($value)) { //is_array - jeżeli jest to tabliza zwraca true, jeśli nie zwraca false
            echo $value . "\n";
        } else {
            RecursiveArraySearch($value);
        }
    }
}

RecursiveArraySearch($contacts); // -> wyświetlą się wszystkie nr telefonów