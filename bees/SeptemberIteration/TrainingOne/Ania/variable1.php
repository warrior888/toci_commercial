<?php

$name = "Nico"; //string
$age = 19; //int
$fatherAge = 55;

$myAge = "19";
$myProfile = array($name, $age, 'Audi'); //typ tablicowy (array) - nie da się jej wyświetlić, ale można zobaczyć co siedzi w środku

$boolTrue = true; //logic 1
$boolFalse = false; //logic 0

$nullVar = null; //wartość pusta

var_dump($myProfile); //pokazuje dokładny rzut zmiennej, czyli co w niej siedzi
var_dump($nullVar);
var_dump($name);
var_dump($myAge);
var_dump($boolTrue);

// +, -, *, /
// % - modulo (reszta z dzielenia) MOD, MODULO

echo $age + $fatherAge;
echo $age - $fatherAge;
echo $age * $fatherAge;
echo $age / $fatherAge;
echo $fatherAge % $age;
echo 2 % 1;

// =, ==, ===
// = - operator przypisania
// ==, === - operator przyrównania
// == - sprawdza, czy wartość jest identyczna
// === - sprawdza czy wartość i typ jest identyczny

// Czym jest instrukcja warunkowa? Sprawdza czy jakiś warunek jest poprawny.

if($age == $fatherAge) //sprawdzamy
{
    echo "Mam tyle lat co mój ojciec";
}
else
{
    echo "Mój ojciec nie ma tyle lat co ja";
}

if($age === $fatherAge) //sprawdzamy
{
    echo "Mam tyle lat co mój ojciec";
}
else
{
    echo "Mój ojciec nie ma tyle lat co ja";
}

$number = 27;

if($number % 2 == "0")
{
    echo "Zmienna ".$number." jest podzielna przez 2";
}
else if($number % 3 == "0")
{
    echo "Zmienna ".$number." jest podzielna przez 3";
}
else
{
    echo $number." nie jest podzielna ani przez 2 ani przez 3!";
}

//x, y, z, alpha

echo "Hello World!"."\n"."My name is ".
        $name."! I'm ".
        $age." old.";
// - jakiś komentarz
// kropka (.) jest operatorem sklejania
    
//echo "Lorem ipsum"; - komentarz jednoliniowy
// "\n" <= TAK
// '\n' <= A TAK NIE
    
/*
 * echo "Test komentarza"; - komentarz wieloliniowy
 */

// --- ZADANIE nr 1 ---

$number1 = 80;
$number2 = 92;

if($number1 + $number2 === 156) {
    echo "Suma zmiennych o wartościach ".$number1." i ".$number2." jest równa 156.";
} else if (($number1 - $number2) % 4 === 0) {
    echo "Różnica zmiennych o wartościach ".$number1." i ".$number2." jest podzielna przez 4.";
} else {
    echo "błąd!";
}

// --- ZADANIE NR 2 ---

$myFirstName = "Anna";
$mySurname = "Siedlecka";
$myDescription = "Nazywam się ".$myFirstName." ".$mySurname."\n";

echo $myDescription;

if($myFirstName == $mySurname){
    echo "Imię jest identyczne z nazwiskiem.";
} else {
    echo "Wszystko ze mną ok.";
}

?>

