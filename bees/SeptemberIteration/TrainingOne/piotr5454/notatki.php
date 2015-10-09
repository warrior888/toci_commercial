<?php

$how = "wesolo"; /*każda zmienna ma swój typ, ta jest typu string czyli 
 * przechowuje jakiś ciąg znaków
 */

$age1 = 15;
$age = 15; //zmienna typu int

echo "piotr5454"."\n"."dzialam ". //\n robi enter
    $how." od ".
    $age." lat."; 

$myProfile = array($how, $age, 'Ibiza');/*zmienna typu tablicowego, może 
 * przechowywać wewnątrz () jakieś inne zmienne, ciąg znaków
 */

$boolTrue = true;
$boolFalse = false;
$nullVar = null;

var_dump($myProfile);//funkcja zrzut zmiennej

var_dump($how);

var_dump($age);

var_dump($boolTrue);

var_dump($nullVar);

//operatory arytmetyczne
echo $age1 + $age . "\n";
echo $age1 - $age . "\n";
echo $age1 * $age . "\n";
echo $age1 / $age . "\n";
echo $age1 % $age . "\n"; //modulo

//operatory przypisania i przyrównania =,==,===
//instrukcje warunkowe sprawdzają czy jakiś warunek jest spełniony

$myAge = 43;
$fatherAge = 57;

if ($myAge == $fatherAge) //wyświetli false, bo wartości nie są równe
{
    echo "true";
}

else {
    
echo "false"; }


if ($myAge === $fatherAge) //wyświetli false, bo i wartości i typy nie są równe
{
    echo "true";
}

else {
    
echo "false"; }


$zmienna1 = 30;

if($zmienna1 % 2 === "0") // 30 jest podzielne przez inna liczbę w tym przypadku
                          //przez 2 bo reszta z dzielenia wynosi 0
{

}