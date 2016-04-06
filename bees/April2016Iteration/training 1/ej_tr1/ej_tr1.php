<?php

	$tablica_numerow = array(1,2,3,4,55,66,77);
	var_dump($tablica_numerow);
	
<<<<<<< HEAD

=======
	$rodzajDzialania = 1;
	
	$wartoscA = 15;
	$wartoscB = 55;
	
	if($rodzajDzialania == 1)
	{
		echo 'Wybrales dodawanie'."\n";
		$wynikDzialania = $wartoscA + $wartoscB;
		echo $wartoscA .' + '. $wartoscB . ' = ' . ($wartoscA+$wartoscB); // dlaczego jako wynik jest 70
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
>>>>>>> eef5e77582f3f1229830d2a51dd5544e4d953ade

