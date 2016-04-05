<?php

	echo "\n";
	echo 'To dzia³a';
	echo "\n";

	//zmienne
	$wiek = 12;
	$nazwa = 'tresc';
	$limitWiekuDoroslosci = 18;
	
	//operatory
	// + - * / || && == === < >= => =<
	//true false null
	
	//instrukcja warunkowa
	if ($wiek >= $limitWiekuDoroslosci)
	{
		echo 'Osoba jest dorosla';
	}
	else
	{
		echo 'Mamy tu dziecko';
	}
	
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
	
	echo "\n";
	
	//petla
