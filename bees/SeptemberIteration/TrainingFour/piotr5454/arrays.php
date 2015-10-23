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
// * innymi słowy dla każdego elementu z tej tablicy będącego jakąś wartością, coś zrób z tą wartością
// * np. wyświetl ją
// * 
// * TO ZNACZY ŻE PRZY KAŻDYM PRZEBIEGU TEJ PĘTLI DO ZMIENNEJ $VALUE BĘDZIE PODSTAWIANA
// * PO KOLEI KAŻDA WARTOŚĆ Z TABLICY dzięki czemu zostaną wyświetlone wszystkie dane z tablicy
// */
//
//$arr = array
//(
//    'co ma ala' => 'ala ma kota',
//    56 => 24,
//    $variable,
//    'jakas wartosc',
//    'inna wartosc',
//); 
//
//foreach ($arr as $value) // count($arr)
//{
//    echo $value . "\n";//czas życia $value jest tylko między tymi nawiasami
//}
//
//
////var_dump($arr);
//
////$arr2 = ['var1', 'var2', 'var3'];
//
////napisz funkcję, która AddCharacter, która do każdego elementu w tablic wyświetli go z danym podanym ciągiem znaków
//// AddCharacter($arrayName, $characters), AddCharacter($arr, 'ala ma psa')
//
//function AddCharacter($arrayName, $characters)
//{
//    foreach ($arrayName as $value) {
//        echo $value . " " . $characters . "\n";
//    }
//}
//
////AddCharacter($arr, 'ala ma psa');
//
////FindInArray($arr, 'alamakota') => true
////FindInArray($arr, 888) => false
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
//
////ShowAllElements($arrayName)
//
////var_dump(FindInArray($arr, 24));
//
//
//
//function ShowAllElements ($arrayName){
//    foreach ($arrayName as $value){
//        echo $value."\n"; //'$value';
//    }
//}
//
////ShowAllElements($arr);
//
//foreach($arr as $key => $value)
//{
//    echo "$key : $value \n";
//}
//
//function SprawdzKlucz($arrayName, $keyName)
//{
//    foreach($arrayName as $key => $value){
//        if($keyName === $key) {
//            return true;
//        }
//    }
//    return false;
//}
//var_dump($arr);
//
//$exercises = array('ala' => 'ma kota', 'bartek' => 'ma psa', 9123, 88, 88);
////var_dump(SprawdzKlucz($arr, 56));
//
////ShowArray($arrayName) => 'klucz: [nazwa_klucza], wartosc: [wartosc] wyświetl
////OwnCount($arrayName) => count($arrayName), for policz
////ShowArrayInString($arrayName) => ma kota ma psa 9123 -> echo ShowArrayInString($exercises)
////HowManyIsInArray($arrayName, $field)
////var_dump(HowManyIsInArray($exercises, 88) => 2
////var_dump(HowManyIsInArray($exercises, 1500100900) => 0
//
////Ania/Ania_arrays.php
//
////Cały czas słucham, gdyby ktoś miał SUPER WAŻNE PYTANIE, to pytajcie.
////Ale chciałbym, żebyście poćwiczyli sami szare komórki :)
////jeśli ktoś skończył, to pisze o tym na TeamViewerze
