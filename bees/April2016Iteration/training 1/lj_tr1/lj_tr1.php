<?php

	echo "\n";
	echo 'To działa';
	echo "\n";
	
	//zmienne
	$wiek = 12;
	$nazwa = 'tresc';
	$limitWiekuDoroslosci = 18;
	
	//operatory
	
	
	//instrukcja warunkowa
	if ($wiek >= $limitWiekuDoroslosci) 
	{
		echo 'Osoba jest dorosla';
	}
	else 
	{
		echo 'Osoba nie jest dorosla';
	}
	
	if ($wiek > 6 && $wiek < 12)
	{
		echo 'podstawowka';
	}
	
	echo "\n";
	
	if ($wiek > 12 && $wiek < 15)
	{
		echo 'gimbaza';
	}
	
	echo "\n";
	
	if ($wiek > 15 && $wiek < 18)
	{
		echo 'sredniak';
	}

	echo "\n";
	
	if ($wiek > 18 && $wiek < 100)
	{
		echo 'dorosly';
	}

	echo "\n";
	
	if ($wiek > 100)
	{
		echo 'Jaki cudem ty jeszcze człowieku zyjesz ;)';
	}
	//pętla