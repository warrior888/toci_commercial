<?php
/* OBJAŚNIENIE:
 * 1. żeby porównać dwa ciągi znaków czy są identyczne czytając najpierw pierwszy z nich od lewej do prawej
 * a potem drugi od prawej do lewej (lub na odwrót) to trzeba je przypisać do siebie, bo oba te ciągi muszą być identyczne 
 * czytając je w palindromie dlatego trzeba użyć operatora przypisania
 * 
 * 2. W pętli musimy operować na długości obu stringów. Aby to osiągnąć musimy użyć dodatkowej zmiennej 
 * np. $dlugoscStringuKandydat i przypisać do niej funkcję strlen od $kandydat. Dzięki tej funkcji program
 * będzie wiedział jaką długość znaków ma zmienna $dlugoscStringuKandydat.
 * 
 * 3. Skoro wiemy jaką ma długość zmienna $dlugoscStringuKandydat która przechowuje analogicznie dlugość zmiennej
 * $kandydat to możemy w pętli operować na tej długości wedle naszych potrzeb( NOTABENE BĘDZIEMY PORÓWNYWAĆ SOBIE
 * WARTOŚCI ZMIENNEJ $kandydat używając w pętli innej zmiennej która przechowuje jej wartości, BO WIADOMO, ŻE 
 * W PĘTLI NIE MOŻEMY UŻYĆ PARAMETRU ZASTOSOWANEGO W FUNKCJI WIĘC MUSIMY COŚ PODSTAWIĆ CO BĘDZIE PRZECHOWYWAĆ WARTOŚĆ TEGO
 * PARAMAETRU), i tak:
 * 
 * a) pierwsza zmienna jakaś tam x musi spełniać następujące warunki:
 * - do zmiennej $x trzeba przypisać zmienną przechowującą długość parametru $kandydat i odjąć 1 żeby 
 * program nie zaczął liczyć od indeksu którego nie ma
 * - następnie przypisać do niej operator większe lub równe od zera żeby program zaczął sprawdzać 
 * od największego indeksu który jest większy od indeksu [0] 
 * - a na koniec zastosować inkrementację żeby program zjeżdżał od największego indeksu do indeksu [0]
 * 
 * b) druga zmienna jakaś tam y musi spełniać następujące warunki:
 * - do zmiennej $y trzeba przypisać również zmienną przechowującą długość parametru $kandydat i odjąć 1,
 * można użyć od razu operatora w tym przypadku mniejsze lub równe od $dlugoscStringuKandydat - 1,
 * - a na koniec zastosować dekrementację żeby program zaczynał od najmniejszego indeksu [0] i jechał do 
 * najwiekszego indeksu [4]
 */

function own_palindrom($kandydat)
{
    $dlugoscStringuKandydat = own_strlen($kandydat);
    
    for($x = $dlugoscStringuKandydat - 1, $y = 0; $x >= 0, $y <= $dlugoscStringuKandydat - 1; $x--, $y ++)
    {
        if($kandydat[$x] != $kandydat[$y])
        {
            return false;
        }
    }
    
    return true;
}

 echo var_dump(own_Palindrom('piotr')); /* x >= 0 więc porównuje od indeksu większego od [0] czyli zaczyna od [4] 
                                         * i zjeżdża w dół tak długo aż dojdzie do indeksu [0]
                                         */
 echo var_dump(own_Palindrom('magda')); /* y <= $dlugoscStringuKandydat - 1 oznacza to samo co y <= 5 - 1 więc
                                         * porównuje od indeksu mniejszego od [4] czyli zaczyna od indeksu [0] i jedzie w 
                                         * górę aż do indeksu [4] 
                                         */

