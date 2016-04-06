<?php

	echo "\n";
	echo 'To dziala';
	echo "\n"; 
	
	//zmienne
	$wiek = 68;
	$nazwa = 'tresc';
	
	$zinterpertowany = 'Moj wiek to: ' . $wiek;
	
	$limitWiekuDoroslosci = 18;
	
	//operatory
	// + - * / || && == === > < >= <= .
	
	//true false null
	
	//instrukacja warunkowa
	if ($wiek >= $limitWiekuDoroslosci)
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
	
	if ($wiek >= 12 && $wiek < 15)
	{
		echo 'gimbaza';
	}
	
	if ($wiek >= 15 && $wiek < 18)
	{
		echo 'szkola wyzsza';
	}
	
	if ($wiek >= 18 && $wiek < 24)
	{
		echo 'studenciak';
	}
	
	if ($wiek >= 24 && $wiek <= 67)
	{
		echo 'wiek pracujacy';
	}
	
	if ($wiek > 67)
	{
		echo 'emeryt';
	}
	
	echo "\n"; 
	
	//petla