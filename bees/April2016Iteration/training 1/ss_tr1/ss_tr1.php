<?php

	echo "\n";
	echo 'To dziala';
	echo "\n"; 
	
	//zmienne
	$wiek = 12;
	$nazwa = 'tresc';
	
	$zinterpertowany = 'Moj wiek to: ' . $wiek;
	
	$limitWiekuDoroslosci = 18;
	
	//operatory
	// + - * / || && == === > < >= <= . ! =! [] ++ -- += -= *= /=
	
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
		echo 'Podstawowka';
	}
	
	if ($wiek >= 12 && $wiek < 16)
	{
		echo 'Gimnazjum';
	}
	
	if ($wiek >= 16 && $wiek < 19)
	{
		echo 'Liceum';
	}
	
	if ($wiek >= 19 && $wiek < 24)
	{
		echo 'Studia';
	}
	
	if ($wiek >= 24 && $wiek < 100)
	{
		echo 'Doroslosc';
	}
	
	echo "\n"; 
	
	//petla
	
	//funkcje
	
	// operatory i petle typu isset,while, foreach, switch 