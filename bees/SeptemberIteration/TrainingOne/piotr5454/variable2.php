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

if (strlen($namesurname) === 12){//nie wyświetli się bo moja nie zmienna ma 12 znaków
  echo $namesurname. "\n";
}


$boolTrue = true; /* interpretowana jako negacja wartości false czyli jest to 
 * wszystko to co nie jest pustym ciągiem znaków czyli dowolny ciąg znaków,
 * wartości liczbowe dodatnie/ujemne/różne od zera (wartości ułamkowe)
 */
$boolFalse = false; //interpretowana jako pusty ciąg znaków "", null i false
                    //i oczywiście jako 0 logiczne
//skąd wiadomo że $boolFalse jest tak interpretowana? mianowicie jeśli:
$boolCandidate1 = "" ;
$boolCandidate2 = null;
$boolCandidate3 = false;/*PONIŻEJ SPRAWDZENIE DLACZEGO TA ZMIENNA JEST "", 
 * WARTOŚCIĄ NULL i WARTOŚCIĄ FALSE  ZARAZEM
 */

if ($boolCandidate1 == false){//PONIEWAŻ PUSTY CIĄG ZNAKÓW
    echo "jest false";
}
if ($boolCandidate2 == false){//WARTOŚĆ NULL
    echo "jest false";
}
if ($boolCandidate3 == false){//I WARTOŚĆ FALSE SĄ INTERPRETOWANE JAKO FALSE
    echo "jest false";        //CZYLI JAKO ZAPRZECZENIE WARTOŚCI TRUE
}

$boolCandidate4 = "ala ma kota";

if ($boolCandidate4 == false){/*przeciwieństwem pustego ciągu znaków
 * będzie wartość która ma jakieś znaki dlatego na ekranie nie dostanie się
 * wartości false tylko wartość true
 */
    echo "jest false";  
}
$boolCandidate5 = "ala ma kota 123";

if ($boolCandidate5 == TRUE){//teraz wyświetli się echo bo wartość jest prawdziwa
    echo "jest true!";  
}
/*WARUNEK IF WYKONUJE SIĘ TYLKO WTEDY JEŚLI WARTOŚĆ W NAWIASACH JEST ZWRÓCONA
 * JAKO TRUE CZYLI KIEDY DANY WARUNEK JEST SPEŁNIONY
 * można z nawiasów wyrzucić przyrównanie do TRUE i echo też się wyświetli bo
 * zmienna $boolCandidate5 jest sama w sobie już wartością true (jest
 * zaprzeczeniem pustego ciągu znaków) a ten IF sprawdza automatycznie czy dana 
 * zmienna jest prawdziwa czy fałszywa
 */
if ($boolCandidate5){//wyświetli się echo bo if sprawdza jaka jest wartość zmiennej 
    echo "jest true!"; 
}
if (true){//analogiczny zapis do tego wyżej
    echo "jest true!"; 
}
if (!($boolCandidate5)){//true zostało zanegowane więc echo nie wyświetli się
    echo "jest true!"; 
}


$example = "ala ma kota";
if (true)
{
   echo $example. "\n"; 
} //standardowy zapis, wyświetli się "ala ma kota"


if (true)
{
    $example1 = "ala ma kota";
}
echo $example1. "\n";/*TUTAJ TEŻ WYŚWIETLI SIĘ "ALA MA KOTA" BO ZMIENNA
 * W NAWIASACH KLAMROWYCH W WARUNKU MA ZASIĘG GLOBALNY, 
 * ALE NIE W PĘTLACH I FUNKCJACH
 */


//POJĘCIE PĘTLI

/*Pętla – szczególna funkcja interpretowana przez interpreter tak długo aż 
warunek zostanie spełniony albo nie;
 są funkcje które mogą wykonywać się bez końca ale skutkuje to błędem i 
 * wywalenie interpretera  */

for ($i = 0; $i<100; $i++) //pętla podczas gdy
{
     echo "hello world po raz $i"."\n";
}// wykona się 99 razy czyli tak długo dopóki wartość $i będzie mniejsza od 100


for ($i = 0; $i<100; $i=$i+1)//$i=$i+1 to dokładnie to samo co $i++
{
    if ($i %2 === 0)
    {
        echo "hello world po raz $i"."\n";
    }    
}/* w pętle można wrzucać warunki np. sprawdzić czy $i jest podzielne przez 2
 * i tylko wtedy wykonać pętlę, WIĘC LOGICZNIE RZECZ UJMUJĄC PĘTLA WYŚWIETLI
 * TYLKO LICZBY PARZYSTE
 */


for ($i = 0; $i<100; $i++)
{
    if ($i %2 === 0)
    {
        echo "hello world po raz $i"."\n";
    }  
        else
        {
            echo " $i nie jest podzielne przez 2"."\n";
        }
}/*wrzucenie przeciwieństwa za pomocą else LOGICZNIE RZECZ BIORĄC WYŚWIETLI
 * WSZYSTKIE LICZBY NIEPARZYSTE 
 */


for ($i = 0; $i<100; $i++)
{
    if ($i %2 === 0)
    {
        echo "hello world po raz $i"."\n";
    }  
        else
        {
            echo " $i nie jest podzielne przez 2"."\n";
        }
}
echo $i; /* TO ECHO POKAŻE LICZBĘ 100, ponieważ pętla została przerwana kiedy
 * $i miała wartość sto w ostatnim przebiegu pętli, bo 100 !< 100, 
 */

// $i++ to to samo co $i=$i+1
// $i-- to to samo co $i=$i-1
