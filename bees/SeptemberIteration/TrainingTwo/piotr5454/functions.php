<?php

/* GDY MAMY DWA FORY WYKONAJĄ SIĘ W PODANEJ PRZEZ NAS KOLEJNOŚCI, ALE DZIĘKI FUNKCJI
 * MOŻEMY STWORZYĆ PRZEŁĄCZNIK KTÓRY WYKONA NAM NP. TYLKO JEDNĄ PĘTLĘ
 */

//$sum = 0;
//for ($j = 20; $j <= 30; $j++) {
//    echo $sum = $sum + $j . "\n";
//}
//
//
//for ($a = 0; $a <=100; $a++)
//{    if ($a %2 === 0)
//    {
//        echo "$a". "\n";
//    }
//}

// JAK ZROBIĆ PRZEŁĄCZNIK PRZY UŻYCIU FUNKCJI:

//function example ($counter){
//    for ($a = 0; $a <=$counter; $a++)
//{    if ($a %2 === 0)
//    {
//        echo "$a". "\n";
//    }
//}
//}  /*teraz mamy cała operację z pętli zagnieżdżoną w funkcji, ALE TRZEBA TĄ FUNKCJĘ
//WYWOŁAĆ JEŚLI MA SIĘ WYKONAĆ*/

//function example1 ($counter){//podobnie jak było w pętli zmienna w () ma zasięg nie globalny
//    for ($a = 0; $a <=$counter; $a++)
//{    if ($a %2 === 0)
//    {
//        echo "$a". "\n";
//    }
//}
//} 
//
//example1 (20);/*ABY WYWOŁAĆ FUNKCJĘ TRZEBA NA KOŃCU NAPISAĆ JEJ NAZWĘ Z PARĄ NAWIASÓW 
// * I JESLI MA WYMAGANY PARAMETR TO GO NAPISAĆ W TYCH NAWIASACH,
// * i to co napiszemy w () zostanie podstawione w miejsce parametru który podaliśmy
// * na początku w () za nazwą funkcji 
// */

//PRZYKŁAD 2 wymyślona funkcja która ma powiedzieć jakie meble są w domu i ile ma dom pokoi

function dom($meble, $iloscpokoi)//funkcja dom zawiera dwie zmienne
{
    echo "dom ma $meble i $iloscpokoi". "\n";//funkcja dom ma wyświetlić te zmienne
}

dom('piec szaf','piec pokoi');//funkcja dom ma wyświetlić wartości które te zmienne zawierają

/*WIĘC TAK OGÓLNIE CHODZI O TO ŻE KAŻDA FUNKCJA O NAZWIE x PRZYJMUJE PARAMETR LUB PARAMETRY y 
 * I COŚ Z TYMI PARAMETRAMI MA ZROBIĆ NP. WYŚWIETLIĆ LUB TAK JAK W PRZYKŁADZIE WYŻEJ
 * PODSTAWIĆ JE W MIEJSCE WARUNKU , A TE PARAMETRY ZAWIERAJĄ JAKIEŚ WARTOŚCI I ŻEBY TE
 * WARTOŚCI ZOSTAŁY PODSTAWIONE W JAKIMŚ WARUNKU LUB WYŚWIETLONE NA EKRANIE TRZEBA JE PO 
 * PROSTU PODAĆ POPRZEZ ICH WYWOŁANIE
 */


// CO TO PARAMETR DOMYŚLNY ?
// to wartość przypisana do danej zmiennej jeżeli wartość tej zmiennej nie zostanie podana np.

function ala($słowo1, $słowo2 = "ma psa")
{
    echo $słowo1." ".$słowo2. "\n";
}
ala('ala');//zostanie teraz użyta wartość domyślna przypisana do $słowo2


function ala1($słowo1, $słowo2 = "ma psa")
{
echo $słowo1." ".$słowo2. "\n";
}
ala1('ala','ma kota');//tu jednak wartość $słowo2 została podana więc par. domyślny nie wyśw.


//TRZEBA PAMIĘTAĆ O KOLEJNOŚCI PODAWANIE PARAMETRÓW ZWYKŁYCH I DOMYŚLNYCH!!!!!!!!

function example2 ($min, $max)
{
    for ($i=$min; $i<=$max; $i++)
    {
    
        if ($i % 2 === 0)
        {
            echo $i. "\n";
        }
    }
    
}
example2('40','70');

