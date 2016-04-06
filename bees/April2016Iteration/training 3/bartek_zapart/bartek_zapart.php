<?php

	//operatory
	// + - * / || && == === > < >= <= . ! =! [] ++ -- += -= *= /=
	
	$trescTextowa = 'cokolwiek';
	echo "\n";
	
	echo $trescTextowa[1] . $trescTextowa[7];
	echo "\n";
	echo "Dlugosc textu: " . strlen($trescTextowa);
	
	echo "Moja flugosc textu: " . bz_strlen($trescTextowa);

	echo "\n";
	//petla
	
	function bz_strlen($text)
	{
		echo "\n";
		echo 'Nic nie robie';
		
		for ($i = 0; isset($text[$i]); $i++)
		{
			echo "\n";
			echo "I wynosi: " . $i;
			echo "\n";
		}
		
		echo "\n";
		
		return $i;
	}
	
	function in_strrev($text)
	{
		// 'beata' ataeb 
		
		//$i; $i >= 0 $i--
		
		//$nowaZmienna = $text[$i]
	}
	
	//tablice

	//funkcje strpos strrev palindrom strtr str_replace*
	