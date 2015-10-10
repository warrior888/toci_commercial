<?php

$notatki = 26.09;

echo "notatki z $notatki";

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

        echo "false" . "\n"; }


if ($myAge === $fatherAge) //wyświetli false, bo wartości nie są równe
        {
            echo "true";
        }

        else {   //ELSE MOŻE BYĆ TYLKO JEDNO

        echo "false" . "\n"; }


$myAge = 43;
$fatherAge = "43";

if ($myAge == $fatherAge) //wyświetli true, bo wartości są równe
        {
            echo "true";
        }

        else {

        echo "false" . "\n"; }


if ($myAge === $fatherAge) //wartości są równe ale wyśw. false bo typy są różne
        {
            echo "true";
        }

        else {   //ELSE MOŻE BYĆ TYLKO JEDNO

        echo "false" . "\n"; }

        
        
        
$number = 30;

if($number % 2 === "0") // 30 jest podzielne przez inna liczbę w tym 
                          //przypadku
                          //przez 2 bo reszta z dzielenia wynosi 0
        {
        echo "true";
        }

        
if ($number % 2 == "0") 
{
    echo "zmienna ".$number. " jest podzielna przez 2";
}

else if($number % 7 === 0) //ELSE IF MOŻE BYĆ NIESKOŃCZENIE WIELE
{
    echo "zmienna ".$number." nie jest podzielna przez 7";
}

else {
    echo "zmienna ".$number. " jest podzielna przez 2 ale nie przez 7!";
}



$number = 12; //jak sprawdzić czy 12 jest podzielne przez 2 i 3 jednocześnie

if ($number % 2 === 0)//instrukcje można zagnieżdżać
{
    if ($number % 3 === 0)
        {
            echo "zmienna ".$number." jest podzielna przez 2 i przez 3" ."\n";
        }
else {
    echo "$number. jest podzielna przez dwa, ale nie przez 20";
}
    if ($number % 6 === 0)
        {
            echo "$number jest podzielne przez 2, 3 i 6" ."\n";
        }
}  

$name = "piotr";
$surname = "mlynczak";
echo "hello jestem $name $surname" ."\n";//""interpretuje zmienne
echo 'hello jestem $name $surname' ."\n";//''interpretuje tylko ciąg znaków



$liczba1 = 2;
$liczba2 = 4;

if ($liczba1 + $liczba2 === 6)/*jeśli wiemy że taka operacja zwróci typ liczbowy
 * to lepiej dla bezpieczeństwa użyć potrójnego przyrównania
 */
        {
            echo 'suma wartości'.$liczba1. 'i'.$liczba2.'jest równa 6';
        }
/*zainicjuj dwie zmienne $number1 i $number2 o wartościach 92 i 64.
 * Sprawdź czy ich suma jest równa 156, jeśli tak to wyświetl komunikat,
 * że suma zmiennych o wartościach $number1 i $number2 jest równa 156.
 * Sprawdź czy różnica tych liczb jest podzielna przez 4. Jeśli żaden z 
 * warunków nie zostanie spełniony to wyświetl błąd.
 */
        
$number1 = 92;
$number2 = 64;

if ($nummber1 + $number2 === 156){
    echo "suma zmiennych o wartości $number1 i $number2 jest równa 156" ."\n";
}

else if ( ($number1 - $number2) % 4 === 0)//dwa nawiasy zgodnie z zas matematyki
{
    return true; /*jesli nie wiemy co wpisać gdy warunek jest spełniony 
     * to na razie przyjmujemy zasadę że wpisujemy return true, możemy także 
     * zostawić puste i użyć potem else i zwrócić błąd
     */
}
else {
    echo 'błąd';
}