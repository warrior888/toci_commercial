<?php

	//zmienne
	$wiek = 12;
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
	
	if ($wiek >=15 && $wiek < 18)
	{
		echo 'licbaza';
	}
	
	if ($wiek >= 18 && $wiek < 23)
	{
		echo 'studbaza';
	}
	
	if ($wiek >= 23 && $wiek < 65)
	{
		echo 'pracbaza';
	}
	echo "\n"; 
	
	//petla