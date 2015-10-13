<?php

$number = 12;
if ( $number % 2 === 0)
{
    if ($number % 3 === 0) 
    {
        echo "$number jest podzielne przez 2 i 3". "\n";
      
    if ($number % 6 === 0)
      {
          echo "$number jest podzielna przez 2, 3 i 6". "\n";
      }
    }
}
else {
    echo "$number nie jest podzielne przez 7"; 
}

/* operatory logiczne sumowania i części wspólnej AND i OR które mają swoje
 * aliasy czyli odpowiedniki które działają tak samo w postaci znaków: 
 * && (podwójny adwersant i || 
 */

/* WARUNKI MOŻNA ŁĄCZYĆ PRZEZ OPERATORY LOG. AND i OR więc powyższy przykład
 * można zapisać o wiele krócej 
 */

if ($number %2 === 0 && $number %3 === 0 && $number %6 === 0 ){
    echo $number.'jest podzielne przez 2, 3 i 6' ."\n";
}

if ($number %2 === 0 && $number %3 === 0 && $number %6 === 0 && $number %24 === 0){
    echo $number.'jest podzielne przez 2, 3 i 6' ."\n";
} //w tym przypadku nic się nie wyśw. na ekranie bo jeden z warunków nie jest spełniony

if ($number %2 === 0 || $number %3 === 0 || $number %6 === 0 || $number %24 === 0){
    echo $number.' jest podzielne przez 2, 3 i 6' ."\n";
} /*ale gdy uzyje operatora || wydzieli on część współną tj. tą część w której warunki
 * się wykonały i komunikat zostanie już wyśw. na ekranie 
 */

$number1 = 24;

if ($number1 %5 === 0 || ($number1 %12 === 0 AND $number1 %24 === 0)){
    echo 'wszystko dziala' ."\n";
} /* OR-|| w matematyce jest mnożeniem a AND dodawaniem więc oba działania są 
 * niezależne od siebie i można nawet neleży je rozdzielić nawiasem i wtedy 
 * instrukcja echo wykona się wtedy i tylko wtedy gdy wykona się warunek zapisany
 * w nawiasie wewnętrznym, a wszystko to co jest przed nawiasem nie musi się wykonać
 * żeby echo zostało wyświetlone 
 * WAŻNE !!-TO CO JEST W NAWIASIE WEWNĘTRZNYM JEST TRAKTOWANE JAKO JEDEN WARUNEK
 */


//ZNAK NEGACJI TO !
$number2 = 76372631; //ta liczba nie jest podzielna przez 3

if ($number2 % 3 === 0){
    echo 'dziala'. "\n";
}/*więc prostą matematyką wystarczy wziąść warunek w nawias i zastosować negację
 przed tym nawiasem  */

if ( !($number2 % 3 === 0) ){
    echo 'dziala'. "\n";
}
else {
    echo 'nie dziala';
}

/*strlen - czyli stringlength, przyjmuje jako parametr string i zwraca jego 
 * długość ; funkcja biblioteczna która zwraca długość jakiegoś ciągu znaków
 */
        
$name = "piotr";

echo strlen($name). "\n"; /*wyświetla na ekranie liczbę 5 bo $name ma pięć znaków
 * i taki wynik działania funkcji można przypisać do zmiennej $nameLength i
 * teraz w zmiennej $nameLength będę miał 5 znaków
 */

$nameLength = strlen($name); /* wynik działania funkcji przypisany do zmiennaej
 *  $nameLength PRZYDA SIĘ W PRZYSZŁOŚCI TAKI ZAPIS
 */
echo $nameLength. "\n";

//ZADANIE - sprawdź czy Twoje imię ma 12 znaków, jeśli tak to wyświetl je

$name1 = "piotr";

if (strlen($name1) === 5){ //jeśli długość ciagu znaków zmiennej $name1 równa
    echo $name1. "\n";           // się 5 to wyświetl wartość zmiennej $name1
}

/*ZADANIE - zainicjuj zmienną o swoim nazwisku, stwórz zmienna $namesurname i 
 * przypisz do niej ciąg znaków ze zmiennych $name i $surname i sprawdź czy
 * ta zmienna ma długość 12
 */

$name2 = "piotr";
$surname = "mlynczak";
$namesurname = $name2." ".$surname;
echo $namesurname. "\n";
if (strlen($namesurname) === 12){//nie wyświetli się bo moja zmienna ma 14 znaków
   
}