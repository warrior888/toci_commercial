<?php

// ------ ZADANIE 1 ------
//napiszemy ile razy mamy taką sytuację że cyfra następna jest o 1 większa od poprzedniej

/*pętlą mozna przechodzić tak jak my byśmy tego teraz potrzebowali po ciągach znaków albo po tablicach
 * więc musimy zmienić typ zmiennej $number z int na string czyli zrzutować zmienną
 */

$number = 1238534253; //cyfry 0-9
$string = (string)$number;/* do zmiennej $string przypisz zrzutowanie wartości $number na typ stringowy
                           * i od teraz możemy przechodzić pętlą np. for po tej liczbie                  
                           */

//możemy teraz wyświetlić tylko 23 z całej $number 

//echo $string[1].$string[2];/* wyświetl pozycje 1 i 2 ze $stirng; jak w układach mikroprocesorowych pozycje 
//                            * są liczone od zera więc nad cyfrą 1 jest zero, nad cyfrą 2 jest jeden itd.  
//                            */
//
$length = strlen($string); /* żeby wiedzieć ile razy mamy przejść pętlą potrzebujemy informacji o długości ciągu znaków,
                            * używamy funkcji strlen która liczy ilość znaków danego stringa przypisując ją do $length
                            * $length przechowuje teraz ilość ciągu znaków $number,
                            * dzieki temu możemy użyć teraz wartości $length w pętli
                            */
//
//for ($i = 0; $i < $length; $i++) {
//    echo $string [$i]. "\n"; }// możemy teraz używając pętli wyświetlić np. każdą cyfrę z osobna
//
//
//// ...cyfra następna jest o 1 większa od poprzedniej
//    
//    
//for ($i = 0; $i < $length; $i++) 
//{   $counter = 0
//    
//        if($string[$i] = $string[$i - 1] + 1) /* jeżeli dana $string dla elementu $i jest równa $string od $i - 1,
//                                              * za [$i-1] trzeba dodać 1 bo szukamy cyfry o jeden większej od poprzedniej
//                                              */                          
//    {
//        $counter++;                          /* to podbij licznik ($counter) ustawiony na indeks zero
//                                              * CZYLI LICZNIK ZACZYNA OD CYFRY Z INDEKSEM ZERO CZYLI OD 1
//                                              * i PODBIJA CZYLI PRZECHODZI PO PROSTU Z CYFRY 1 NA KOLEJNĄ CYFRĘ itd.
//                                              */
//    }
//}

/*w kodzie powyższym są dwa błędy:
 * 1. $i nie może równać się 0 bo skoro [$i - 1] to od zera odejmie jeden i będzie chiała podstawić indeks -1 który
 * nie istnieje, więc wystarczy zmienić wartość początkową $i z 0 na 1
 * 2. ta pętla przechodzi 10 razy i za każdym razem do $counter przypisuje 0, ewentualnie wyświetli na końcu 
 * $counter równy 1 lub 0, bo albo trafi na taki przypadek na końcu pętli albo nie, czyli $counter powinien być wyrzucony
 * na zewnątrz 
 *              !!!!!!!!!!! NIGDY NIE URZYWAĆ LICZNIKÓW WEWNĄTRZ PĘTLI !!!!!!!!!!!!!
 *
 * WIĘC KOD POWINIEN WYGLĄDAĆ TAK JAK PONIŻEJ 
 */
//$counter = 0;
//         
//for ($i = 1; $i < $length; $i++) 
//{  
//    
//        if($string[$i] === $string[$i - 1] + 1) 
//    {
//        $counter++;                          
//    }
//} 

//$counter = 0;
//         
//for ($i = 1; $i < $length; $i++) 
//{  
//    
//        if((int)$string[$i] === (int)$string[$i - 1] + 1)/* bez zrzutowania program by się wykonał bo porównujemy stringi
//                                                          * ale w przyszłości gdybyśmy chcieli zrobić coś z tymi liczbami
//                                                          * to bezpieczniej jest rzutować je wczesniej  
//                                                          */ 
//    {
//        $counter++;                          
//    }
//} 

//  ------ ZADANIE 2 ------
// dodaj do siebie wszystkie cyfry ze $number i wyświetl wynik
/* trzeba będzie użyć operatora przypisania z operatorem wykonującym pewne działanie na argumentach czyli
*  
 * += - przypisuje sumę bierzącej wartości zmiennej docelowej i argumentu 
 * 
 * działa to na takiej zasadzie, że bieżąca wartość docelowa to jest kolejna cyfra z ciągu znaków plus argument [$i]
 * czyli najpierw 1 będzie bierzącą wartością potem program postawi znak + i przypisze tej sumie argument czyli kolejną
 * cyfrę ze stronga czyli 2, potem dwa będzie wartością docelową znowu postawi + i doda kolejny argument czyli 3 itd
 */
//$counter = 0;

//for ($i = 0; $i < $length; $i++)
//{
//    $counter += (int)$string[$i]; /* $counter podbijamy o aktualną wartość liczbową zmiennej $string
//                                   * CZYLI LICZNIK PRZECHODZI NA KOLJENĄ WARTOŚĆ ZE STRINGA I DODAJE JĄ DO POPRZEDNIEJ
//                                   */
//}

//  ------ ZADANIE 3 ------
//  napisz funkcję która sprawdzi czy dana liczba ma n cyfr
//  

function example($number, $n)
{
     $string = (string)$number;
     $length = strlen($string);
     if ($length === $n)
     {
         return true;
     }
     return false;
}

var_dump(example(122324, 10));

//$counter = 0;
//for ($i = 0; $i < $length; $i++) {
//    // $counter += (int)$string[$i];
//}
//echo $counter . "\n";
//function Example($number, $n)
//{
//    $string = (string)$number;
//    $length = strlen($string);
//    if ($length === $n) {
//        return true;
//    }
//    return false;
//}
//function Licznik($number, $n)
//{
//    $string = (string)$number;
//    $length = strlen($string);
//    $counter = 0;
//    for ($i = 0; $i < $length; $i++) {
//        if ((int)$string[$i] === $n) {
//            $counter++;
//        }
//    }
//    return $counter;
//}
////echo "\n" . Licznik($number2, 0) . "\n";
////"123123" //!return => void
//$number2 = 123412313;
//function Reverse($param = 3213214)
//{
//    $string = (string)$param;
//    $length = strlen($string);
//    $result = ""; //string
//    //$string = "12312";
//    while ($length - 1 >= 0) {
//        $result .= $string[$length];
//        $length--;
//    }
//    return $result;
//}
//var_dump(Reverse());