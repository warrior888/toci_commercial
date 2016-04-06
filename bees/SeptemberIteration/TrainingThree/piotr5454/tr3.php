<?php //
//function own_strrev () //funkcja wypisuje znaki od końca
//{
//}
//function Palindrom($kandydat)
//{
//    return $kandydatLength = own_strrev($kandydat);
//}

//PRZEPISUJEMY FUNKCJĘ str_replace

//function own_str_replace($kandydat, $podmiana, $textPodmiany)//operujemy na wywołaniu
{
    
}

//echo own_str_replace('beata naciuk', 'naciuk', 'zapart');/*szukamy podmiany beata naciuk
 //* z naciuk na zapart, lecz nie działa więc piszemy wyżej zwykły str_replace
 //*/

//
//function own_str_replace($kandydat, $podmiana, $textPodmiany)
//{
//    
//}
//echo str_replace('beata naciuk', 'naciuk', 'zapart');
//
//echo own_str_replace('beata naciuk', 'naciuk', 'zapart');

/*ALE WYŚWIETLI SIĘ BŁĄD ŻE JEST NIEWŁAŚCIWA KOLEJNOŚĆ ARGUMENTÓW A WŁAŚCIWA W 
* PROGRAMIE JEST NATOMIAST TAKA JAK PONIŻEJ*/

//echo str_ireplace($search, $replace, $subject);// to jest właściwa kolEjność

//trzeba zatem odwrócić kolejność parametrów w funkcji co się dzieje poniżej
//
//
//function own_str_replace(, $podmiana, $textPodmiany, $kandydat)
//{
//    
//}
//echo str_replace('beata naciuk', 'naciuk', 'zapart');
//
//echo own_str_replace('beata naciuk', 'naciuk', 'zapart');

/*żeby sprawdzić czy kandydat ma coś do podmiany to potrzebujemy sprawdzić czy
 * string występuje w stringu (funkcja czy string is string) - SPRAWDZA CZY W STOSIE 
 * ISTNIEJE IGŁA, ALE NIE MOŻEMY ZASTOSOWAĆ SYSTEMOWEGO stringisstring TYLKO
 *  MUSIMY NAPISAĆ SWOJE*/

//function own_strstr($entireString, $portion)
//{
//    for ($i = 0; $i < strlen($entireString))

        
/* metoda powyżej zwraca true/false, musimy zmierzyć entireString za pomocą FOR
 *TŁUMACZENIE FORA:
 * jeśli $i jest równe 0 i $i jest mniejszy od długości znaków $entireString i $i++
 DALEJ:
 * ALGORYTMY PORÓWNYWANIA TEKSTU PORÓWNUJĄ GO OD KOŃCA SPRAWDZAJĄC OSTATNIĄ LITERĘ WIĘC
 * np. Beata Naciuk Naciuk sprawdzi czy na zakresie dłoguści słowa Beata ostatnią 
 * literą jest "k" więc na wysokości spacji to zrobi i jesli ta wartość się nie 
 * będzie zgadzać to olewa całą resztę bo nie ma sensu szukania dalej skoro pierwszy
 * znak już się ni zgadza- TAK DZIAŁAJĄ ALGORYTMU SZUKANIA TEKSTU W TEKŚCIE
 * 
 * 
 */
 