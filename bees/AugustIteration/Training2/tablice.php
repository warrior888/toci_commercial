<?php

	$text = 'safasdfgad';
	
	$tablica = array('bartek', 'beata', 'szpula', 'arecki', 'spejson', 'art21', 'Sosza');
	
	$dlugosc = count($tablica);
	
	
	for ($i = 0; $i < $dlugosc; $i++)
	{
		echo "\n".$tablica[$i]."\n";
	}
	
	// count sizeof
	
	//$tablica->Length
	
	echo $dlugosc;
	
	echo $tablica[2];
	
	$tablica[] = 'slawek';
	
	$tablica[] = 'seb';
	
	//$tablica[] = $tablica;
	
	$dlugosc = count($tablica);
	
	echo $tablica[5];
	// zad 2
	for ($i = 0; $i < $dlugosc; $i++)
	{
		echo "\n".$tablica[$i]."\n";
	}
	
	var_dump($tablica);


echo ' :-) ';