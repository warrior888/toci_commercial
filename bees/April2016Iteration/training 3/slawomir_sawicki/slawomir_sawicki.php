<?php

	//operatory
	// + - * / && == === > < >= <= . ! =! [] ++ -- += -= *= /=
	
	$trescTextowa = 'cokolwiek';
	$nic = 'Nic nie robie';
	echo "\n";
	
	echo $trescTextowa[1] . $trescTextowa[7];
	echo "\n";
	echo "Dlugosc textu: " . strlen ($trescTextowa);

	bz_strlen ($trescTextowa, $nic);
	
	echo "\n";
	
	//petla
	
	function bz_strlen($text, $drugaZmienna)
	{
		echo "\n";
		echo $drugaZmienna;
		
		for ($i = 0; isset ($text [$i]); $i++)
		{
		}
		
		echo "\n";
		
		return $i;
	}
	
	function in_strrev($text)
	{
		// 'beata' ataeb
		
		//$i; $i >= 0 $i--
		
		//$nowazZmienna = $text[$i]
	}
	
	
	//tablice
	
	//funkcje strpos strrev palindrom strtr str_replace
	
	echo "\n";
	
	function ss_strrev($textWynikowy)
	{
		$textOdwrocony="";
		$dlugosc = strlen($textWynikowy);
		for($i=$dlugosc-1;$i >=0; $i--)
		{
			$textOdwrocony .= $textWynikowy[$i];
		}
		return $textOdwrocony;
	}
	
	echo ss_strrev('text');
	
	echo "\n";
	
	
	