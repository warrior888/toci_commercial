<?php

$text='liczenieliterek';

	echo "\n";
	echo $text[4];
	echo "\n";

	for ($a = 0; isset($text[$a]); $a++)
	{
		echo $a;
		echo "\n";
		echo 'nastepna petla';
		echo "\n";
	}	
	echo "\n";	
	echo 'wynik z funkcji strlen ';
	echo strlen ($text); //wyrzuca ilosc znakow z text
	echo "\n";
	for ($x = 0; $x < strlen($text); $x++)
	{
		echo $text[$x];
		echo "\n\n";
	}
	echo 'CWICZENIE DO ZADANIA DOMOWEGO';
	echo "\n\n";
//wpisanie tekstu od tylu z zastosowaniem znaku dekrementacji --

	for ($h = strlen($text); $h >= 0 ;$h--)
	{
		echo $text[$h];
		echo "\n";
	}

