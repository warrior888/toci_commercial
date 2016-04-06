<?php

	//operatory

	$trescTekstowa = 'cokolwiek';
	echo "\n";

	echo $trescTekstowa[1] . $trescTekstowa[7];

	echo "\n";
	echo "Dlugosc tekstu: " . strlen($trescTekstowa);
	echo "Moja dlugosc tekstu wynosi: " . bz_strlen($trescTekstowa);
	echo "\n";

	//petla
	
	function bz_strlen($tekst)
	{
		echo "\n";
		echo 'Nic nie robie';
		
		echo (bool)isset($tekst[9]);
		
		echo "\n";
		
		for ($i=0; isset($tekst[$i]); $i++)
		{
			
		}
		
		echo "\n";
		
		return $i;
	}

	
	
	function in_strrev($tekst)
	{
		//$i; $i >= 0 $i--
		//$nowaZmienna = $tekst[$i]
	}

	//tablice

	//funkcje strpos strrev palindrom strtr str_replace



?>