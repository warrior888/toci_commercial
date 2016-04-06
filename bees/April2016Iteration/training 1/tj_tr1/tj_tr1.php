<?php
	echo "\n";
	echo 'To dziala';
	echo "\n";

	//zmienne
	$wiek = 30;
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
	echo "\n";
	if ($wiek > 6 && $wiek < 12)
	{
		echo 'podstawowka';
	}
	
	if ($wiek >= 12 && $wiek < 16)
	{
		echo 'gimanzjum';
	}
	
	if ($wiek >= 16 && $wiek < 19)
	{
		echo 'liceum';
	}
	
	if ($wiek >= 19 && $wiek < 25)
	{
		echo 'studia';
	}
	else 
	 	echo 'Chodzisz do pracy, przykro mi ';
	
	echo "\n";
	
	//petla
