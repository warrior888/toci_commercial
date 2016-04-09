<?php 

//funkcje strpos palindrom strtr str_replace*

//strlen
	function bd_strlen ($string)	
	{		
		for ($i=0; isset($string[$i]); $i++) 
		{
			
		}
		return $i;
	}
	
//strrev	
	function bd_strrev ($string) 
	{
		$stringRev = '';
		
		for ($i = bd_strlen($string) - 1; $i >= 0; $i--)
		{
			$stringRev .= $string[$i];
		}
		return $stringRev;
	}
	
//substr
	function bd_substr ($string, $needle, $length) 
	{
		$newString = '';
		$newLength = $needle + $length;
		
		for ($i = $needle; $i <= $newLength && isset($string[$i]); $i++)
		{
			$newString .= $string[$i];
		}		
		return $newString;
	}

//strpos
	function bd_strpos ($stringLonger, $stringNeedle) {
		$position = null;
		$stringNeedleLength = bd_strlen($stringNeedle);
		for ($i = 0; $i <= bd_strlen($stringLonger); $i++)
		{
			if ($stringNeedle == bd_substr($stringLonger, $i, $stringNeedleLength)) 
			{
				return $position = $i;
			}
		}
		return $position;
	}
	
	
$string = 'Przyklad';
$needle = 3;
$length = 6;

$stringLonger = "Lorem ipsum";
$stringNeedle = "ipsum";

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
echo '** Funkcja substr **';
echo "\n";
echo 'Wyraz: "' . $string . '" Od:' . $needle .' o dlugosci:' . $length . ' Wynik: ' . bd_substr($string, $needle, $length);

echo "\n";
echo '** Funkcja strpos **';
echo "\n";
echo 'Wyraz:' . bd_strpos($stringLonger, $stringNeedle);

