<?php

//Sprawdzanie palindromów

$tablica = array ("igor", "kajak", "piotrek");

$dlugoscTablicy = count($tablica);

echo $dlugoscTablicy;

for ($i=0; $i < $dlugoscTablicy ; $i++) 
	if ($tablica[$i] == strrev($tablica[$i]))
	{
		echo "Slowo " . "$tablica[$i]" . " jest palindromem" . "\n";
	}
	else 
	{
		echo "Slowo " . "$tablica[$i]" . " nie jest palindromem" . "\n";
	}
?>