<?php

// ---- ZADANIE 6 ----
////ShowArray($arrayName) => 'klucz: [nazwa_klucza], wartosc: [wartosc] wyświetl wszystko

function ShowArray($arrayName)
{        
foreach ($arrayName as $key => $value) // count($arr)
{
    echo "$key : $value \n";
}
}
var_dump($arr);


// ---- ZADANIE 7 ----
//OwnCount($arrayName) => count($arrayName),użyć for, funkcja która zliczy elementy i potem je zwróci


// ---- ZADANIE 8 ----
// 
//$exercises = array('ala' => 'ma kota', 'bartek' => 'ma psa', 9123);
//
//ShowArrayInString($arrayName)
//
//echo ShowArrayInString($exercises)=> ma kota ma psa 9123
//
//mamy tablicę i mamy napisać funkcję dzięki której na ekranie pojawią wartości kluczy po echo
//JAKO SKLEJONE W JEDEN STRING
//
//
//
// ---- ZADANIE 9 ----
////HowManyIsInArray($arrayName, $field)
//
//ILE WYSTĄPIEŃ MA DANE SŁOWO, DANA WARTOŚĆ $field W TABLICY
//
//jeśli dodam 88, 88 w $exercises = array('ala' => 'ma kota', 'bartek' => 'ma psa', 9123) 
//czyli $exercises = array('ala' => 'ma kota', 'bartek' => 'ma psa', 9123, 88, 88)
//i zrobię var_dump na tą tablicę to chcę otrzymać 2 lub 0 czyli:
//var_dump(HowManyIsInArray($exercises, 88) => 2
//var_dump(HowManyIsInArray($exercises, 1500100900) => 0
//



