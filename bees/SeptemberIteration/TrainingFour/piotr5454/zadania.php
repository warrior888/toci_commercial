<?php

//ShowArray($arrayName) => 'klucz: [nazwa_klucza], wartosc: [wartosc]
//OwnCount($arrayName) => count($arrayName), for
//ShowArrayInString($arrayName) => ma kota ma psa 9123 -> echo ShowArrayInString($exercises)
//HowManyIsInArray($arrayName, $field)
//var_dump(HowManyIsInArray($exercises, 88) => 2
//var_dump(HowManyIsInArray($exercises, 1500100900) => 0


function ShowArrayInString($arrayName, $keyName)
{
    foreach($arrayName as $key => $value){
        if($keyName === $key) {
            echo $keyname;
        }
    }
    return false;
}
function OwnCount ($arrayName){
    for ($i = 0; $i < $length; $i++) {
        echo $value;
    }
}
