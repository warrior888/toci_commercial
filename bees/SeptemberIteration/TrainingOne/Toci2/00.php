<?php

//Zainicjuj dwie zmienne liczbowe i napisz algorytm, który jeśli pierwsza z tych liczb jest parzysta wyświetli 
//sumę, różnice, iloczyn i iloraz tych liczb. Wyniki mają być wyświetlone każdy w osobnej linii.

$zmienna1 = 4;
$zmienna2 = 3;

if ($zmienna1 % 2 === 0)
{
	echo $zmienna1 + $zmienna2;
	echo $zmienna1 - $zmienna2;
	echo $zmienna1 * $zmienna2;
	echo $zmienna1 / $zmienna2;
}
else
{
	echo "nie ma takiego rownania";
}