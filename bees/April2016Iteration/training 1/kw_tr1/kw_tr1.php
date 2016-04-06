<?php
	echo "\n";
	echo 'To dziala';
	echo "\n";
	
	
	//zmienne
	$wiek = 12;
	$nazwa = 'tresc';
	
	$zinterpretowany = 'Moj wiek to: ' . $wiek;
	
	$limitWiekuDoroslosci = 18;
	
	//operatory
	// + - * / || && == === < > >= <= .
	
	//instrukcja warunkowa
	if ($wiek > $limitWiekuDoroslosci)
	{
		echo 'Osoba jest dorosla';
	}
	else
	{
		echo 'Dzieciak';
	}
	
	echo "\n";
	
	if( $wiek >6 && $wiek <12)
	{
		echo 'podstawowka';
	}
	
	if( $wiek >=12 && $wiek <15)
	{
		echo 'gimbaza';
	}
	
	if( $wiek >=15 && $wiek <20)
	{
		echo 'technikum';
	}
	
	if( $wiek >=20 && $wiek <25)
	{
		echo 'studia';
	}
	
	if( $wiek >=25 && $wiek <67)
	{
		echo 'praca zawodowa';
	}
	
	if( $wiek >=67 && $wiek <999)
	{
		echo 'emerytura';
	}
	
	echo "\n";
	
	//petla