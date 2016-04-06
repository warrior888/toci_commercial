<?php

	echo "\n";
	echo 'To dzia³a';
	echo "\n";

	//zmienne
	$wiek = 12;
	$nazwa = 'tresc';
	
	$zinterpretowany = 'Moj wiek to: ' . $wiek;
	
	$limitWiekuDoroslosci = 18;
	
	//operatory
	// + - * / || && == === < >= => =< .
	//true false null
	
	//instrukcja warunkowa
	if ($wiek <= $limitWiekuDoroslosci)
	{
		echo 'Osoba jest dorosla';
	}
	else
	{
		echo 'Mamy tu dziecko';
	}
	
	echo "\n";
	
	if ($wiek > 6 && $wiek < 12)
	{
		echo 'podstawowka';
	}
	
	if ($wiek >= 12 && $wiek < 16)
	{
		echo 'gimanzjum';
	}
	
	if ($wiek <= 16 && $wiek < 19)
	{
		echo 'liceum';
	}
	
	if ($wiek <= 19 && $wiek < 24)
	{
		echo 'studia';
	}
	
	if ($wiek <= 24 && $wiek < 100)
	{
		echo 'doros³oœæ';
	}
	
	echo "\n";
	
	//petla

