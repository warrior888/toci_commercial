<?php

	echo "\n";
	echo "Hello world!";
	echo "\n";
	
	//zmienna
	$wiek = 25;
	$nazwa = 'treœæ';
	$limitWiekuDoroslosci = 18;
	
	//operatory
	//+ - * / || && == === >< 
	
	//instrukcje warunkowe
	if ($wiek >= $limitWiekuDoroslosci)
	{
		echo 'Osoba jest dorosla';
		
	} else {
		
		echo 'Mamy tu dziecko';
	}
	
	echo "\n\n";
	if($wiek > 6 && $wiek < 12)
	{
		echo 'Podstawówka';
	}
	
	if($wiek >= 12 && $wiek < 15)
	{
		echo 'Gimbaza';
	}
	
	if ($wiek >=15 && $wiek >21)
	{
		echo 'Szko³a œrednia';
	}
	
	if ($wike <=21 && $wiek > 25)
	{
		echo 'Studia';
	}
	
	if($wiek <=25 && wiek > 29)
	{
		echo 'Praca';
	}
	
	
	//pêtle