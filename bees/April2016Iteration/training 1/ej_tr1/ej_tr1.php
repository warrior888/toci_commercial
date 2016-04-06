<?php
<<<<<<< HEAD
=======
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

