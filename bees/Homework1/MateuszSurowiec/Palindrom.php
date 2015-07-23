<?php

function CzyPalindrom($kandydat)
{
	$kandydat = 'kaaaaajak';
	echo "Slowo to: " . $kandydat . "\n";
	
	$tablica = array();
	$tablica = str_split($kandydat);
	$dlugosc = sizeof($tablica);
	echo "Dlugosc slowa to: " . $dlugosc . "\n";
	$nowyKandydat = "";
	
	for ($i = $dlugosc; $i >=0; $i--)
	{
		$nowyKandydat = $nowyKandydat . $tablica[$i];
	}
	echo "Nowe slowo to: " . $nowyKandydat . "\n";
	
	if ($kandydat == $nowyKandydat)
	{
		echo "Slowo: " . $kandydat . " jest palindromem";
	} else {
		echo "Slowo: " . $kandydat . " nie jest palindromem";
	}

} CzyPalindrom($kandydat);