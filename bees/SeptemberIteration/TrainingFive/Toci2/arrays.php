<?php
$contacts = array();

$contacts['home'] = array(
    'mama' => array('private' => 56664444, 'work' => 111222111),
    'tata' => 454534535,
    'brat' => 666666655
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


/*function silnia($liczba)//przykład wykorzystania rekurencji do wyliczania silni;
{
   if($liczba < 2) 
      return 1;
   else
      return $liczba*silnia($liczba-1);  
}
echo silnia(5);

