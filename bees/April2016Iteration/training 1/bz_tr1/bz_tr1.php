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
		echo 'podstawowka';
	}
	
	if ($wiek >= 12 && $wiek < 15)
	{
		echo 'gimbaza';
	}
	
	echo "\n"; 
	
	//petla
	
	//funkcje
	
	// operatory i petle typu isset,while, foreach, switch 