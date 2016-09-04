<?php

	$liczba = 7; //int
	$text = "szkolenie"; // string
	$logiczna = $liczba > 8; //true 0 1 logiczna
	$pesel = "84080818074"; //string
	$zmienna = 'dowolna'; //string
	$cyfra = 7;
	
	echo "dlugosc textu " .$text . " to : " . DlugoscTextu($text). "\n";
	
	
	$dlugosc = DlugoscTextu($text);
	
	echo "odwrocony text: " . OwnStrrev($text)."\n";
	echo "odwrocony text: " . OwnStrrev("radara")."\n";
	
	var_dump($dlugosc);
	
	$tablica = array(1,'dwa','three'); //nieasocjacyjna
	
	$tablicaAsocjacyjna = array( //asocjacyjna
		'a' => 2,
		'imie' => 'bartek',
		'liczba' => 8,
		//2 => 'dowolna dla indexu 2',
		//'dowolna'
	);
	
	//echo $tablicaAsocjacyjna[3];
	
	foreach ($tablicaAsocjacyjna as $key => $value)
	{
		echo "\n Klucz: " . $key . " wartosc : " . $value . "\n";
		// 0 => 1
		// 1 => dwa
		// 2 => 3
	}
	
	foreach ($tablica as $wartosc)
	{
		
	}
	
	//var_dump($tablica);
	//echo "\n isset: ";
	//var_dump(isset($tablica[2]));
	
	function DlugoscTextu($candidate) //szkolenie
	{
		//var_dump(isset($candidate[9]));
		
		for($i = 0; isset($candidate[$i]); $i++)
		{
			//echo "\n " .$candidate[$i] . " " . $i . " \n";
			//var_dump(isset($candidate[$i]));
		}
		
		return $i;
	}
	
	function OwnStrrev($candidate)
	{
		$result = "";
		for ($i = DlugoscTextu($candidate) - 1; $i >= 0; $i--) // ?
		{
			//echo "Literka: " . $candidate[$i] . " dla indexu " . $i . "\n";
			$result .= $candidate[$i]; // ?
		}
		
		return $result;
	}
	
	exit;
	
	if (ord($text[0]) == 115)
	{
		echo "\npierwszy znak zmiennej text to s \n";
	}
	else if ($text[0] == "s")
	{
		echo "\npierwszy znak zmiennej text to nie s \n";
	}
	else 
	{
		
	}
	
	for($i = 0; $i < 128; $i++)
	{
		//echo "\n Kod ascii " . $i . " to " . chr($i) . "\n";
	}
	
	//for (deklaracje zmiennych; warunek zakonczenia dzialania fora/petli; operacje do wykonania po kazdej petli)
	for($i = 0, $j = 8; $j > 0 ; $i++)
	{
		echo "\n Zmienna i wynosi: " . $i . ", zmienna j wynosi " . $j . "\n";
		
		$j = --$j;
	}
	
	
	echo "\n Kod ascii  to " . ord("Ÿ") . "\n";
	
	echo $text[0] . "\n\n";
	echo $text[1] . "\n\n"; // isset
	
	// operatory: + - * / ++ -- && || > < >= <= ! != == === !== += -= *= /= .= . %
	$liczba += $cyfra; // $liczba = $liczba + $cyfra jest identyczne z +=
	var_dump($liczba++); // 14 15
	var_dump(++$liczba); // 15 16 
	$liczba++;
								//  lub
	$zmiennaLogiczna = ($liczba != 17);
	
	var_dump(8 % 3); //2
	var_dump(7 % 2); //1
	
	var_dump((8 / 3) . "\n");
	
	var_dump($zmiennaLogiczna);
	
	echo "\n Liczba jest rowna: " . $liczba . "\n";
	
	//$tablica = array();
	$tablica[0] = "moja pierwsza tablica";
	$tablica['m'] = 1;
	$tablica['a'] = 4;
	$tablica['p'] = array();
	$tablica[1] = array(
		'imie' => 'bartek', 'pesel' => '84080818074'
	);
	$tablica[2] = array(
		'imie' => 'beatka', 'pesel' => '84080818074'
	);
	
	$tablica['imie'] = 'bartek';
	
	/*
	 komentarz blokowy
	 */
	
	var_dump($liczba);
	var_dump($text);
	var_dump($logiczna);
	var_dump($zmienna);
	var_dump($tablica);