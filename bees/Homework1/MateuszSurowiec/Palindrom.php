<?php




function CzyPalindrom($kandydat)
{
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

} 

function Palindrom ($text)
{
	$dlugosc = strlen($text);
	for ($i = 0; $i < $dlugosc; $i++)
	{
		if ($text[$i] != $text[$dlugosc - $i]) // raddae
		{
			return false;
		}
	}
}

// rad dar

function Palindrom($text)
{
	return strrev($text) === $text;
}


CzyPalindrom('kaaaaajak');
CzyPalindrom('radar');
CzyPalindrom('cyc');
CzyPalindrom('fhdasuig');