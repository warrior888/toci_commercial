<?php

$how = "wesolo"; /*każda zmienna ma swój typ, ta jest typu string czyli 
 * przechowuje jakiś ciąg znaków
 */

$age = 15; //zmienna typu int

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

echo "piotr5454"."\n"."dzialam ". //\n robi enter
    $how." od ".
    $age." lat."; 




