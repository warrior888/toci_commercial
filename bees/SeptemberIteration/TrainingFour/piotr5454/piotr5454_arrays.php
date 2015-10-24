<?php
//// czym jest zmienna tablicowa i jak się je inicjuje?
//// TABLICA to specyficzny typ zmiennej 
//
//        
//$arr = array() /* tak się inicjuje zmienną tablicową;
// * ta zmienna jest typu array czyli typu tablicy która może 
// * przechowywać w sobie jakieś wartości w (), możemy wrzucić do niej stringa
// * 'ala ma kota', int 24 lub jakąś zmienną np. $variable która będzie typu true
// */
//        
//$variable = true;
//
//$arr = array(
//    'ala ma kota', 
//    24, 
//    $variable); //teraz mamy array która ma w sobie 3 elementy rozdzielone przecinkiem
//
////istnieje drugi sposób inicjowania tablic ja niżej ale trzymamy się pierwszego na razie
//$arr2 = ['var1','var2','var3'];
//
//
//$arr = array(
//    'ala ma kota', 
//    24, 
//    $variable);
//
//var_dump($arr); /*po użyciu funkcji var_dump wyświetli nam się zawartość tej tablicy następuyjąca:
// * array(3) {
// * [0]=>
// * string(11) "ala ma kota"
// * [1]=>
// * int(24)
// * [2]=>
// * bool(true)
// * }
// * WIDZIMY ŻE KAŻDA TABLICA MA KLUCZ NUMEROWANY OD ZERA CZYLI [0], [1], [2] itd.
// * KTÓRY JEST IDENTYFIKATOREM MÓWIĄCYM NAM NA KTÓRYM UNIKATOWYM MIEJSCU W DANEJ 
// * TABLICY JEST JAKAŚ WARTOŚĆ, INNYMI SŁOWY POD CZYM DANA WARTOŚĆ SIEDZI
// * i tak 
// * na miejscu zerowym jest ciąg znaków, na pierwszym jest liczba, a na drugim zmienna
// * o wartości true
// */
//
///*PODSUMOWUJĄC ZMIENNA $arr JEST TABLICĄ ZAWIERAJĄCĄ W SOBIE DANE ELEMENTY I
// * MAJĄCĄ KLUCZE
// * KLUCZE SĄ NUMEROWANE OD ZERA, ALE MOŻNA ZMIENIĆ DOMYŚLNĄ NUMERACJĘ
// */
//
//
//
//
////jak zmienić domyślną numerację kluczy?- przypisując operatorem => numer klucza
//$arr = array(
//    1 => 'ala ma kota', 
//    24, 
//    $variable); // teraz pierwszy element będzie miał klucz 1, a nie 0
//
////jak się dobierać do poszczególnych elementów ? żeby wyświetlić na ekranie coś to:
//
//$arr = array(
//    'ala ma kota', 
//    24, 
//    $variable);
//
//echo $arr [0]/*podaje się nazwę zmiennej i parę nawiasów [] w które wpisujemy numer
// * klucz który chcemy wyświetlić na ekranie, TERAZ WYŚW. SIĘ 'ala ma kota'
// */
//  
//  
//        
//        
////FUNKCJE BIBLIOTECZNE - służą do przechodzenia, do posługiwania się zmiennymi 
////i ich wartościami w tablicy jedną z nich jest $count
//
//$arr = array(
//    'ala ma kota', 
//    24, 
//    $variable);
//
//echo count($arr); /* zwraca szczegółowy rozmiar tablicy $arr czyli 3 bo tyle elementów ma ta tablica
//                   * NIE MYLIĆ Z NUMERACJĄ KLUCZY 0-2 !!!!!*/
//
//
//
//
//// ZADANIE - stwórz pętlę która wyświetli wszystkie wartości elementów w tablicy
////najpierw można przypisać do zmiennej $length funkcje wyświetlającą wartości elementów
//
//$length = count ($arr)/*teraz mamy zmienną której wartość równa się rozmiarowi tablicy czyli 3 i możemy ją użyć 
// * w pętli w warunku do spełnienia czyli
// * ROZMIAR TABLICY 3 NIE RÓWNA SIĘ NUMERACJI KLUCZY, OSTATNI KLUCZ MA NUMER 2 ZATEM OSTATNIĄ CYFRĄ W WARUNKU PĘTLI 
// * JEST 2 NIE 3 !!!!!! 
// * DLATEGO PĘTLA WYŚWIETLI WSZYSTKIE WARTOŚCI ELEMENTÓW !!!  
// */
//        
//for ($i = 0; $i < $length; $i++ )
//{
//    echo $arr[$i]. "\n";
//}
//
//
//
//
///* KLUCZE - do nazywania indeksów możemy wykorzystywać także inne wartości niż tylko liczby
// * np. klucze stringowe będziemy nazywać a nie numerować */  
//        
//$arr = array(
//    'co ma ala' => 'ala ma kota', 
//    24, 
//    $variable);
//
//$length = count ($arr)
//        
//var_dump($arr);/* teraz pierwszy klucz dostaniemy o nazwie ["co ma ala'] zawierający
// * string "ala ma kota" ALE KOLEJNE KLUCZE będą NUMEROWANE OD ZERA i tak, czyli:
// *
// * array(3) {
// * ["co ma ala"]=>
// * string(11) "ala ma kota"
// * [0]=>
// * int(24)
// * [1]=>
// * bool(true)
// */      
//
////gdyby teraz użyć pętli
//for ($i = 0; $i < $length; $i++ )
//{
//    echo $arr[$i]. "\n";
//}
////to wyświetli nam ona wartości zapisane w kluczach 0 i 1 ale nie będzie w stanie
////wyświetlić zawartości klucza 'co ma ala' bo wyświetli notice do linijki z echo
////że jest nie zdefiniowany
//
//
//
//
//// INDEKSY KLUCZY W POSTACI NAZW I CYFR/LICZB MOŻNA STOSOWAĆ RAZEM np.:
//$arr = array
//(
//    'co ma ala' => 'ala ma kota',//pierwszy indeks ma nazwę 'co ma ala'
//    56 => 24,//wymuszenie numerowania klucza od 56, inaczej zacząłby od zera mikroprocesor numerować
//    $variable,
//    'jakas wartosc',
//    'inna wartosc',
//);   //array
//
////echo $arr[2];
//
//$length = count($arr);
//
////var_dump($arr);
//
////echo $arr['co ma ala'];
//
//for ($i = 0; $i < $length; $i++) {
////    echo $arr[$i]."\n";
//}
//
//
//
//
///* PĘTLE FOREACH - służy do przechodzenia tylko po tablicach, po każdym jej elemencie
// * i z każdym elementem może coś zrobić
// */
//
///*SKŁADNIA: foreach mówi że będziemy przechodzili po tablicy jakiejś i dla każdej tej tablicy
// * zmienna tablicowa (tj. $arr) jako alies czyli zmienna tymczasowa (tj. $value) dla każdego
// * elementu tej tablicy wyświetl tą wartość czyli tą zmienną tymczasową
// * 
// * PO POLSKU TERAZ - zmienna tablicowa zawiera tablicę z jakimiś wartościami
// * w związku z czym jeśli z angielskiego "value" oznacza "wartość" to zmienna $value będzie się 
// * odnosić do każdej z wartości
// * 
// * innymi słowy dla każdego elementu w tej tablicy będącego jakąś wartością, coś zrób z tą wartością
// * np. wyświetl ją
// * 
// * TO ZNACZY ŻE PRZY KAŻDYM PRZEBIEGU TEJ PĘTLI DO ZMIENNEJ $VALUE BĘDZIE PODSTAWIANA
// * PO KOLEI KAŻDA WARTOŚĆ Z TABLICY dzięki czemu zostaną wyświetlone wszystkie dane z tablicy
// */
//
$variable = true;

$arr = array
(
    'co ma ala' => 'ala ma kota',
    56 => 24,
    $variable,
    'jakas wartosc',
    'inna wartosc',
); 
//
//// ---- ZADANIE 1 ----
//
////wyświetl wszystkie wartości jakie są w tablicy
//
//foreach ($arr as $value) // count($arr)
//{
//    echo $value . "\n";//czas życia $value jest tylko między tymi nawiasami
//}
//
//var_dump($arr);
//
//
//
//
////  ---- ZADANIE 2 ----
//
///* napisz funkcję AddCharacter która każdy element tablicy wyświetli z podanym ciągiem znaków
// * AddCharacter ($arrayName, $characters), AddCharacter ($arr, 'ala ma psa')
// */
//
//function AddCharacter($arrayName, $characters)
//{
//    foreach ($arrayName as $value)
//    {
//        echo $value ." ". $characters . "\n";//gdyby użyc RETURN zamiast ECHO to przy pierwszym obiegu pętli 
//    }                                        //cała funkcja zostaje przerwana   
//}
//AddCharacter($arr, 'ala ma psa');
//
//
////  ---- ZADANIE 3 ----
//
///* napisz funkcję która pobiera dwa paramerty, jako pierwszy parametr pobiera tablice,
// * jako drugi jakąś wartość i jeżeli ta wartość jest w tablicy to zwraca true jeżeli nie to false  
// * przy wywołaniu funkcji zwróci:
// * FindInArray($arr, 'ala ma kota') => true
// * FindInArray($arr, 888) => false
// */
//
//function FindInArray($arrayName, $search)
//{
//    foreach ($arrayName as $value)
//    {
//        if ($value === $search )
//        {
//            echo true;
//        }
//            else
//            {
//                echo false;
//            }
//    }
//}
//
//var_dump(FindInArray($arr, 'ala ma kota'));//vardump sprawdzi co ta funkcja zwraca
////TERAZ FUNKCjA WYŚWIETLI WARTOŚĆ 1 ORAZ NULL CZYLI FALSE
//
//FindInArray($arr, 'ala ma kota')//A TERAZ WYŚWIETLI TO CO POWINNO W ZADANIU CZYLI TRUE
//       
//       
//// DRUGI SPOSÓB ROZWIĄZANIA
//        
//function FindInArray($arrayName, $search)
//{
//    foreach ($arrayName as $value)
//    {
//        if ($value === $search )
//        {
//            return true; //return przerywa działanie funkcji
//        }
//    }
//    return false;
//}
//
//FindInArray($arr, 'ala ma kota');//nic nie zwróci bo return przerwało działanie funkcji

// --- ALE ---
// 
//function FindInArray($arrayName, $search) {
//    foreach ($arrayName as $value){
//        if($value === $search)
//        {
//            return true;
//        }
//    }
//    return false;
//}
//var_dump(FindInArray($arr, 'ala ma kota'));//TO SAMO Z UŻYCIEM funkcji vardump zadziała jak należy


//  ---- ZADANIE 4 ----
// wyświetl wszystkie elementy z tablicy

//function ShowAllElements($arrayName)
//{
//    foreach ($arrayName as $value)
//    {
//        echo $value ."\n";
//    }
//}
//ShowAllElements($arr);




//  ---- ZADANIE 5 ----

//ZA POMOCĄ foreach MOŻNA WYŚWIETLIĆ OPRÓCZ SAMEJ WARTOŚCI TAKŻE NAZWE KLUCZA

/* do wartości klucza można się dobrać w pętli foreach podając sobie oprócz samej wartości $value
 * podając na lewo jakąś zmienną do której trafi nazwa tego klucza potem strzłeczkę  i $value czyli
 * wartość tej zmiennej która będzie w tym kluczu
 */

//foreach($arr as $key => $value) 
//{
//    echo "$key : $value \n";
//}

// sprawdź teraz czy dany klucz występuje w tablicy, jak jest wyświetl true

/*ZAMIAST parametrów funkcji $x i $y można podac inne nazwy $arrayName i $keyName
 * żeby się łatwiej kojarzyło z tym czego szukamy i w czym, 
 * że szukamy ogólnie jakiejś nazwy klucza (czy wartości pod którą ma dany klucz) wewnątrz jakiejś tablicy, 
 * a konkretną tablicę w której tego szukamy oraz konkretną nazwę klucza którego szukamy podajemy w wywołaniu funkcji
 * 
 * A DO ZMIENNYCH $key i $value AUTOMATYCZNIE SĄ PODSTAWIANE PO KOLEI NAZWY KLUCZY ORAZ WARTOŚCI TYCH KLUCZY
 */

//function sprawdzKlucz($x, $y)
//{
//        foreach ($x as $key => $value)
//        {
//            if ($y === $key)
//            {
//                return true;
//            }
//        }
//return false;
//}
//var_dump(sprawdzKlucz($arr, 56));




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



