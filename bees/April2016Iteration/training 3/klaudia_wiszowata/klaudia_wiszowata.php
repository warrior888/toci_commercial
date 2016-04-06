<?php

	//operatory

	$trescTekstowa = 'cokolwiek';
	echo "\n";

	echo $trescTekstowa[1] . $trescTekstowa[7];

	echo "\n";
	echo "Dlugosc tekstu: " . strlen($trescTekstowa);
	echo "Moja dlugosc tekstu wynosi: " . kw_strlen($trescTekstowa);
	echo "\n";
	

	//petla
	
	function kw_strlen($tekst)
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

	
	
	function kw_strrev($tekst)
	{
		echo "\n";
		//$i; $i >= 0 $i--
		//$nowaZmienna = $tekst[$i]
		for ($i=0; isset($tekst[$i]); $i--)
		{
			
		}
		echo "\n";
		return $i;
	}
	
	echo "Costam: ". kw_strrev($trescTekstowa);

	//tablice

	//funkcje strpos strrev palindrom strtr str_replace



?>