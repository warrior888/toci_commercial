<?php

for ($a = 0; $a <=100; $a++)
{    if ($a %2 === 0)
    {
        echo "$a". "\n";
    }
       
}
/* RÓŻNICA W STOSUNKU DO PĘTLI FOR : 
 * 1. zmienną inicjujemy nie w nawiasie () tylko wyżej
 * 2. w () wrzucamy tylko warunek 
 * 3. modyfikacje zmiennej (licznik) wrzucamy w ciało pętli
 * 4. w ciele while nie musi być umieszczony koniecznie licznik, może być np. dowolna
 * zmienna zainicjowana w skrypcie, ALE WAŻNE ŻEBY COŚ BYŁO BO INACZEJ PĘTLA BĘDZIE
 * SIĘ WYKONYWAĆ W NIESKOŃCZONOŚĆ
 */
$a = 0;

while ($a<=100)
{
    if ($a %2 === 0){
        echo $a;
    }
    $a++;
}

/* której pętli użyć to zależy tylko od tego co robimy, czy chcemy robić coś na
 * zmiennej zainicjowanej poza nawiasem czy na nowej zmiennej która jest w ()
 */

//przykład poniżej pokazuje że w while można edytować $ a nie tylko ją kapiować
for ($a = $wysokość; $a <=100; $a++)
{    if ($a %2 === 0)
    {
        echo "$a". "\n";
    }
}

$a = 0;

while ($a<=100)
{
    if ($a %2 === 0){
        echo $a;
    }
    $a++;
}