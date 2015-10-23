<?php
$arr = array
(
    'co ma ala' => 'ala ma kota',
    56 => 24,
    $variable,
    'jakas wartosc',
    'inna wartosc'
);   //array

//ShowArray($arrayName) => 'klucz: [nazwa_klucza], wartosc: [wartosc]
function ShowArray ($arrayName){
    foreach ($arrayName as $key => $value){
        echo 'Klucz : ' . $key . '  Wartosc : ' . $value . "\n";
    }
}
ShowArray($arr);

echo "\n \n \n";
//OwnCount($arrayName) => count($arrayName), for
//
//
function OwnCount($arrayName)
{
    $i = 0;
    
    foreach ($arrayname as $value)
        {
        $i++;
        }
    return $i;
}

echo OwnCount($arr);

echo  "\n \n \n";
//ShowArrayInString($arrayName) => ma kota ma psa 9123 -> echo ShowArrayInString($exercises)
$exercises = array('ala' => 'ma kota', 'bartek' => 'ma psa', 9123, 88, 88);
function ShowArrayInString($arrayName){
    foreach ($arrayName as $value){
       echo $value;
    }
}

ShowArrayInString($exercises);

//HowManyIsInArray($arrayName, $field)
//var_dump(HowManyIsInArray($exercises, 88) => 2
//var_dump(HowManyIsInArray($exercises, 1500100900) => 0
echo "\n \n \n";
function HowManyIsInArray($arrayName, $field){
    foreach($arrayName as $key => $value)
        {
        if($key === $field)
            {
            return FALSE;
        }
    }
 
    return TRUE;
        }
        
HowManyIsInArray($exercises, 88);
 
 







/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

