<?php 

//funkcje strlen strrev strpos substr palindrom strtr str_replace*

//strlen
	function bd_strlen ($string)	
	{
		$length = 0;
		
		for ($i=0; isset($string[$i]); $i++) 
		{
			$length += 1;	
		}
		
		return $length;
	}
	
//strrev	
	function bd_strrev ($string) 
	{
		$stringRev = '';
		
		for ($i=bd_strlen($string)-1; $i>=0; $i--)
		{
			$stringRev .= $string[$i];
		}
		return $stringRev;
	}
	
//strpos
	function bd_strpos ($stringLonger, $stringMatch) 
	{
		
	}

$string = 'Przyklad';
$stringLonger = 'Dluzszy ciag znakow do sprawdzenia';
$stringMatch = 'do';

//wypisywanie
echo "\n";
echo '** Funkcja strlen **';
echo "\n";
echo 'Licze ilosc liter w wyrazie "' . $string . '": ' . bd_strlen($string);

echo "\n";
echo '** Funkcja strrev **';
echo "\n";
echo 'Robie lustrzane odbicie wyrazu "' . $string . '": ' . bd_strrev($string);

echo "\n";
echo '** Funkcja strpos **';
echo "\n";
echo 'Szukam wyrazu "'. $stringMatch .'" w ciagu znakow: "' . $stringLonger . '": ' . bd_strpos($stringLonger, $stringMatch);

