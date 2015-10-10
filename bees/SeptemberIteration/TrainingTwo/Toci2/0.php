<?php

//Napisz funkcję, która z przedziału [a, b] wyświetli wszystkie liczby, których reszta z dzielenia przez 2 LUB 5 wynosi 1 
 //(pętla while). Parametr b jest wymagany, a domyślnie wynosi 0.
 
function Liczby ($poczatek,$koniec) {

$i = $poczatek;
while ($i <= $koniec) {

	if ($i % 2 || $i % 5 === 1) 
	{
	echo $i;
	}

	$i++; 
	}
}

echo Liczby (1,10);