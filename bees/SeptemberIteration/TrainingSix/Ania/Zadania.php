<?php

// Zadanie_1
// Sprawdź, czy dany ciąg liczbowy ma parzystą ilość cyfr.

echo "Zadanie_1" . "\n";

function checkOne($number)
{
    $string = (string)$number;
    $length = strlen($string);
    
    if($length % 2 === 0)
    {
        return "Ciag liczbowy $number ma parzysta ilosc cyfr.";
    }
    else
    {
        return "Ciag liczbowy $number NIE ma parzystej ilosci cyfr.";
    }
}

echo checkOne(192837465);
echo "\n";
echo checkOne(1928374465);

echo "\n" . "\n";

// Zadanie_2
// Sprawdź, czy dany ciąg liczbowy ma ilość cyfr podzielną przez n

echo "Zadanie_2" . "\n";

function checkTwo($number, $n)
{
    $string = (string)$number;
    $length = strlen($string);
    
    if($length % $n === 0)
    {
        return "true";
    }
    else
    {
        return "false";
    }
}

echo checkTwo(234324421, 2);
echo "\n";
echo checkTwo(32727163, 2);

echo "\n" . "\n";

// Zadanie_3
// Stwórz drzewo genealogiczne - tablica $rodzina, dziadkowie, rodzice, dzieci.

echo "Zadanie_3" . "\n";

$rodzina = array(
    'dziadkowie' => [Zdzisława, Lech],
    'rodzice' => [Wiesława, Wiesław],
    'dzieci' => [Anna, Monika, Adam]
);

var_dump($rodzina);

//$rodzina2 = array(
//    'dziadkowie' => ['Zdzislawa i Lech' => ["Wieslawa i Wieslaw"  => [Anna, Monika, Adam]]],
//);
//
//var_dump($rodzina2);
