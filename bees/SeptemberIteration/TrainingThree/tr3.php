<?php

	//zadanie dom 1 napisac palindrm z for

	function own_strlen($string)
	{
		
	}
	
	$tabAsocjacyjna = array('a' => 18, 'b' => 14, 'beata' => 'text');
	
	var_dump($tabAsocjacyjna);
	
	
	$tabAsocjacyjna['a'] = 'ala ma kota';
	
	var_dump($tabAsocjacyjna);
	
	$zmienna = 'a';
	
	$tabAsocjacyjna[$zmienna] = 'ala ma psa';
	
	var_dump($tabAsocjacyjna);
	
	$tabAsocjacyjna[$zmienna] = array('a' => 30, 'b' => 14, 'beata' => 'text');
	
	var_dump($tabAsocjacyjna);
	
	echo $tabAsocjacyjna['a'][$zmienna];
	
	$imie = 'anina';
	
	//echo $imie[3] . $imie[2] . $imie[1] .  $imie[0];
	
	// odraca string
	// radar => radar
	//beata => ataeb
	function own_strrev($strToRev)
	{
		$wynik = '';
		
		for ($i = strlen($strToRev) - 1; $i >= 0; $i--)
		{
			$wynik .= $strToRev[$i];
		}
		
		return $wynik; 
	}
	
	echo own_strrev('beata');
	echo "\n";
	echo own_strrev('kuba');
	echo "\n";
	echo own_strrev('tomek');
	echo "\n";
	echo own_strrev('ania');
	echo "\n";
	
	function Palindrom($kandydat)
	{
		return $kandydat == own_strrev($kandydat);
	}
	
	function ownPalindrom($kandydat)
	{
		//radar => 5
		for($i = 0, $j = strlen($kandydat) - 1; $i < $j; $i++, $j--)
		{
			if ($kandydat[$i] != $kandydat[$j])
			{
				return false;
			}
		}
		
		return true;
	}
	
	if (ownPalindrom('radar')) {
		echo 'jest to plandrom';
	}
	
	if (ownPalindrom('beata')) {
		echo 'jest to plandrom';
	}
	
	// Beata aciuk Naciuk   Naciuk
	function own_strstr($entireString, $portion)
	{
		$portionLength = strlen($portion);
		$entireStringLength = strlen($entireString);
		
		for($i = 0; $i < $entireStringLength; $i++)
		{
			for ($k = 0, $j = $portionLength; $j < $entireStringLength; $k++, $j++)
			{
				if ($entireString[$j] == $portion[$portionLength - k])
				{
					/// todo dokonczyc cala logike zad 2
				}
			}
		}
	}
	
	function own_strpos($kandydat, $podmiana)
	{
		/// zad 3 zrobic strpo s z wykorzystaniem strstr
	}
	
	function own_strcut($kandydat, $podmiana)
	{
		$kandydatLength = strlen($kandydat);
		$podmianaLength = strlen($podmiana);
		
		for ($i = 0; $i < $kandydatLength; $i++)
		{
			
		}
	}
	
	echo own_strcut('Beata aciuk Naciuk', 'aciuk');
	
	// 
	// beata ata ikunio => beikunio
	// beata beata wikunio
	// Beata Naciuk Naciuk Zapart =>  Beata Zapart
	function own_str_replace($podmiana, $textPodmiany, $kandydat)
	{
		if (strstr($kandydat, $podmiana))
		{
			
		}
	}
	
	echo "\n";
	echo str_replace('naciuk', 'zapart', 'beata naciuk');
	echo "\n";
	echo own_str_replace('naciuk', 'zapart', 'beata naciuk');