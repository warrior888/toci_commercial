<?php

//$number = 24;
//
//if($number1 % 2 === 0) 
//{
//    if($number1 % 3 === 0)
//    {
//        echo "$number1 jest podzielna przez 2 i 3";
//        if($number1 % 6 === 0)
//        {
//            echo "$number1 jest podzielna przez 2, 3 i 6";
//        }
//    }
//    else 
//    {
//        echo "$number1 jest podzielna przez 2, ale nie jest podzielna przez 3";
//    }
//}
//else
//{
//    echo "$number1 nie jest podzielna przez 2";
//}

// --- OPERATORY LOGICZNE ---
// AND - &&, OR - ||

//if($number % 2 === 0 && $number % 3 === 0 && $number % 6 === 0){
//    echo $number1." jest podzielne przez 2,3 i 6";
//}

//if($number % 5 === 0 || ($number % 12 === 0 && $number % 24 === 0)){
//    echo "Wszystko działa!";
//}

//if($number % 3 === 0 || ($number % 6 === 0 && $number % 15 === 0 && $number % 4 === 0)){
//    echo "Działa";
//}

// --- NEGACJA ---

// tworzymy czy liczba nie jest podzielna przez 3 (!)
//if(!($number % 3 === 0)){
//    echo "Działa";
//} else {
//    echo "Nie działa";
//}

// --- STRLEN ---
// sprawdza długość zmiennej

//$name = Mike;
//$nameLength = strlen($name);
//echo $nameLength;

//$name = "Anna";
//if(strlen($name) === 12){
//    echo $name;
//}

//$name = "Anna";
//$surname = "Siedlecka";
//$name_surname = $name." ".$surname;
//if(strlen($name_surname) === 14){
//    echo $name_surname;
//}

// ---   ---

//$boolTrue = true; // wartość true to: !false
//$boolFalse = false; // wartość false to: "", null, false, 0
//
//$boolCandidate1 = ""; // == false
//$boolCandidate2 = null; // == false
//$boolCandidate3 = false; // == false
//$boolCandidate4 = "ala ma kota"; // == true
//$boolCandidate5 = -1; // == true
//$boolCandidate6 = 0; // == false
//
//if($boolCandidate1 == false){
//    echo "jest false!";
//}
//
//if($boolCandidate4 == true){
//    echo "jest true!";
//}
//// bez przyrównania też będzie działać dla true
//if($boolCandidate4){
//    echo "jest true!";
//}
//// dla false
//if(!($boolCandidate4)){
//    echo "jest true!";
//}
//
//if(!$boolCandidate6){ // ($boolCandidate6 == false)
//    echo "jest false!";
//}

//$example = "Ala ma psa";
//function Test()
//{
//    if(true) {
//        $example2 = "Ala ma rybki;
//    }
//}
//echo $exmaple2; // nie wyświetli się, bo jest w funkcji jako zmienna lokalna, a nie globalna

// --- PĘTLE ---

for($i = 0; $i < 6; $i++){
// $i++ - ikrementacja
// $i-- - dekrementacja
    if($i % 2 === 0){
        echo "Hello world po raz $i\n";
    } else {
        echo "$i nie jest podzielne przez 2\n";
    }
}

echo "\n".$i;