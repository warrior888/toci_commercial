<?php

$variable = true;

$arr = array
(
    'co ma ala' => 'ala ma kota',
    56 => 24,
    $variable,
    'jakas wartosc',
    'inna wartosc'
);   //array

//echo $arr[2];

$length = count($arr);

//var_dump($arr);

//echo $arr['co ma ala'];

for ($i = 0; $i < $length; $i++) {
//    echo $arr[$i]."\n";
}


foreach ($arr as $value) // count($arr)
{
//    echo $value . "\n";
}


//var_dump($arr);

//$arr2 = ['var1', 'var2', 'var3'];

//napisz funkcję, która AddCharacter, która do każdego elementu w tablic wyświetli go z danym podanym ciągiem znaków
// AddCharacter($arrayName, $characters), AddCharacter($arr, 'ala ma psa')

function AddCharacter($arrayName, $characters)
{
    foreach ($arrayName as $value) {
        echo $value . " " . $characters . "\n";
    }
}

//AddCharacter($arr, 'ala ma psa');

//FindInArray($arr, 'alamakota') => true
//FindInArray($arr, 888) => false

function FindInArray($arrayName, $search) {
    foreach ($arrayName as $value){
        if($value === $search)
        {
            return true;
        }
    }
    return false;
}

//ShowAllElements($arrayName)

//var_dump(FindInArray($arr, 24));



function ShowAllElements ($arrayName){
    foreach ($arrayName as $value){
        echo $value."\n"; //'$value';
    }
}

//ShowAllElements($arr);

foreach($arr as $key => $value)
{
    echo "$key : $value \n";
}

function SprawdzKlucz($arrayName, $keyName)
{
    foreach($arrayName as $key => $value){
        if($keyName === $key) {
            return true;
        }
    }
    return false;
}
var_dump($arr);
//var_dump(SprawdzKlucz($arr, 56));



