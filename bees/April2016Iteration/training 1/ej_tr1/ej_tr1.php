<?php
<<<<<<< HEAD
	echo "\n\n";
	echo 'Wybierz dzia³anie:';
	echo "\n---------------------\n";
	echo '1. Dodawanie'."\n";
	echo '2. Odejmowanie'. "\n";
	echo '3. Dzielenie'."\n";
	echo '4. Mnozenie'. "\n\n";
	
	$rodzajDzialania = 6;
	
	$wartoscA = 15;
	$wartoscB = 55;
	
	if($rodzajDzialania == 1)
	{
		echo 'Wybrales dodawanie'."\n";
		$wynikDzialania = $wartoscA + $wartoscB;
		echo $wartoscA .' + '. $wartoscB . ' = ' .$wartoscA+$wartoscB; // dlaczego jako wynik jest 70
		echo "\n";
		echo $wartoscA. ' + '. $wartoscB. ' = '. $wynikDzialania;
	} elseif ($rodzajDzialania == 2)
	{
		echo 'Wybrales Odejmowanie'. "\n";
		$wynikDzialania = $wartoscA - $wartoscB;
		echo $wartoscA. ' - ' .$wartoscB . ' = ' .$wynikDzialania;
		
	} elseif ($rodzajDzialania == 3)
	{
		echo 'Wybrales Dzielenie'. "\n";
		$wynikDzialania = $wartoscA/$wartoscB;
		echo $wartoscA. ' / '. $wartoscB . ' = '.$wynikDzialania;
		
	} elseif ($rodzajDzialania == 4)
	{
		echo 'Wybrales Mnozenie'. "\n";
		$wynikDzialania = $wartoscA * $wartoscB;
		echo $wartoscA. ' * ' . $wartoscB . ' = ' .$wynikDzialania;
		
	} else
	{
		echo 'Nie ma takiego dzialania!';
	}
	echo "\n";
	
	echo "\n" . '---------------------------'."\n";
	
	
	
	
=======

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
	
	if ($wiek >=15 && $wiek <21)
	{
		echo 'Szko³a œrednia';
	}
	
	if ($wike >=21 && $wiek < 25)
	{
		echo 'Studia';
	}
	
	if($wiek >=25 && wiek < 29)
	{
		echo 'Praca';
	}
	
	
	//pêtle
>>>>>>> d877b7bca9c800b25d641c10d3b74e2dcf1abbeb
