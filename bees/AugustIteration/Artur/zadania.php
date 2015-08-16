<?php
// zadanie 1
$ocena = 6;

if ($ocena > 6 || $ocena < 1) // warunek warunki //jezeli
{
	echo 'Drogi nauczycielu, nie ma takiej oceny !';
}
else
{
	echo 'Drogi nauczycielu, ocena istnieje !';

	if ($ocena == 1)
	{
		echo 'jest to Jeden !';
	}
	if ($ocena == 2)
	{
		echo 'jest to Dwa !';
	}
	if ($ocena == 3)
	{
		echo 'jest to Trzy !';
	}
	if ($ocena == 4)
	{
		echo 'jest to Cztery!';
	}
	if ($ocena == 5)
	{
		echo 'jest to Piec!';
	}
	if ($ocena == 6)
	{
		echo 'jest to Szesc !';
	}
	
	echo "\n";
	// 1 zad domowe !
}

// zad2 tekst 

$text = 'szybkosc dzialania skryptu';

for ($i = strlen($text); $i >= 0; $i--)
{
	echo $text[$i];
	echo "\n";
		
}

 