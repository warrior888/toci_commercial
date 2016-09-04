<?php

	function frogie_strlen($text)
	{
		// $text[] operator indexowania
		// $text[$i] indexowanie tabliciowo zmienna
		// instrukcja w php !isset($zmienna[$index]) - sprawdzenie czy index istnieje w tablicy/texcie
		// petla while, for
		
		for ($i=0;isset($text[$i]);$i++)
		{
			
		}
		
		return $i;
		//return strlen($text);
	}
	
	
	function frogie_strrev($text)
	{
		$revertedText = null;
		
		for ($i=strlen($text)-1;$i>=0;$i--)
		{
			$revertedText = $revertedText.$text[$i]; 	
		}
		
		return $revertedText;
	}
	function strrev_b($text)
	{
		$textRev = null;
		for ($i=strlen($text);$i>=0;$i--)
		{
			$textRev = $textRev.$text[$i];
		}
		
		return $textRev;
	}
	
	// beata, 2, 2 - at
	// beata, 1, 3 - eat
	function frogie_substr($text, $start, $length)
	{
		$slowo = '';
		
		for($i=$start;$i<$start+$length;$i++)
		{
			echo $text[$i];
			$slowo .= $text[$i];
		}
		return $slowo;
		
	}
	//function podziel($text)
	//{
		//for($i=0;$i<strlen($text);$i++)
		//{
			//echo strlen($text);
			//$czlon = $czlon.$text[$i];
			//echo $czlon;
			//if(" "==$text[$i])
			//{
				//echo "\n";
				//$czlon = $czlon."\n";
			//}
		//}
		
		//return $czlon;
	//}
	
	function frogie_strpos($text, $needle, $start = 0)
	{
		
	}
	
	function frogie_substr_count($text, $needle, $start = 0)
	{
		$szukane = " ";
		$ilosc = null;
		for($i=0;$i<strlen($text);$i++)
		{
			$szukane = substr($text,$i ,strlen($needle));
			if($szukane ==$needle )
			{
				$ilosc = $ilosc +1;
			}
			
		}
		echo "\n".$ilosc."\n";
	}
	
	function frogie_explode($delimiter, $text)
	{
		
	}