<?php

// Uczymy się rozróżnienia, czym jest tak naprawdę typ liczbowy i typ znakowy.

//echo "Zadanie_1" . "\n";
//// Program, który zliczy sumę cyfr, które w danym ciągu liczb są większe o 1 niż poprzednie.
//// 123 -> 2 + 3 = 5
//// 231234126 -> 3 + 2 + 3 + 4 + 2 = 14
//
//$number = 12385342534;
//// Jak zrobić z $number ciąg znkaów?
//// Odp. Należałoby zmienną $number zrzutować.
//// Poprzez rzytuowanie rozumiemy zmianę typy danej zmiennej.
//$string = (string)$number;
//
//// var_dump($number) . "\n" . "\n";
//// var_dump($string);
//// echo $string[1] . $string[2] . "\n"; // -> 23
//
//$length = strlen($string);
//
//$suma = 0;
//
//for($i = 1; $i < $length; $i++)
//{
//    if((int)$string[$i] === (int)$string[$i - 1] + 1)
//    {
//        $suma += (int)$string[$i];
//    }
//}
//echo $suma;
//
//echo "\n";

//echo "Zadanie_2" . "\n";
//// Funkcja sprawdzająca, czy dana liczba ma n-cyfr.
//
//function checkLength($number, $n)
//{
//    $string = (string)$number;
//    $length = strlen($string);
//
//    if($length === $n)
//    {
//        return "true";
//    }
//    else
//    {
//        return "false";
//    }
//}
//
//echo checkLength(12385342534, 11);
//
//echo "\n";

//echo "Zadanie_3" . "\n";
//// Ile razy dana cyfra występuje w danej liczbie?
//
//function howManyNumbers($number, $checkNumber)
//{
//    $string = (string)$number;
//    $length = strlen($string);
//    $counter = 0;
//    
//    for($i = 0; $i < $length; $i++)
//    {
//        if((int)$string[$i] === $checkNumber)
//        {
//            $counter++;
//        }
//    }
//    
//    return $counter;
//}
//
//echo howManyNumbers(1231232123, 1);
//
//echo "\n";

//echo "Zadanie_4" . "\n";
//// Napisać funkcję, która odwraca kolejność znaków.
//
//function Reverse($parametr)
//{
//    $string = (string)$parametr;
//    $length = strlen($string);
//    $result = "";
//    
//    for($i = $length - 1; $i >= 0; $i--)
//    {
//        $result .= $string[$i];
//    }
//    
//    return $result;
//}
//
//echo Reverse(123123123);
//echo "\n";
//var_dump(Reverse(123123123));