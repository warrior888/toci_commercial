<?php
	//wyswietlanie
	echo "\n";
	echo 'To dziala';
	echo "\n";
	
	//zmienne
	$nazwa = 'tresc';
	$wiek = 12;
	$LimitWiekuDoroslosci = 18;
	
	//operatory
	// + - * / || && == === > < >= <= .
	
	//instrukcja warunkowa
	echo "\n";
	if ($wiek >= $LimitWiekuDoroslosci)
	{
		echo 'Osoba jest dorosla';
	}
	else
	{
		echo 'Osoba nie jest dorosla';
	}
	echo "\n";
	if ($wiek > 6 && $wiek <= 12)
	{
		echo 'Podstawowka';
	}
	if ($wiek > 12 && $wiek <= 15)
	{
		echo 'Gimnazjum';
	}
	if ($wiek > 15 && $wiek <= 18)
	{
		echo 'Liceum';
	}
	if ($wiek > 18 && $wiek <= 23)
	{
		echo 'Studia';
	}
	if ($wiek > 23)
	{
		echo 'Praca zawodowa';
	}
	echo "\n";
	
	//petla
	
	
?>