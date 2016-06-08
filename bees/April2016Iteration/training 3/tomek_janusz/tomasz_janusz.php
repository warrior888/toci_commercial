<?php
	/*echo "\n";
	echo in_strrev("pomarancza");
	
	function in_strrev($text)
	{
		$odwroconyTekst = '';
		
		for($i = tj_strlen($text)-1; $i >= 0; $i--)
		{
			$odwroconyTekst .= $text[$i];
		}
		
		return $odwroconyTekst;
	}

	function tj_strlen($text)
	{
		for ($i = 0; isset($text[$i]); $i++)
		{
		}
		return $i;
	}
	echo "\n";
	*/
	
	/*for($i = 0; $i<strlen($test); $i++)
	{
		for($j = strlen($test); $j>0; $j--)
		{
			$test1[$j] = $test[$i];
		}
	}*/
	$text = "abaa";
	echo is_palindrom($text);
	function in_strrev($text)
	{
		$nowytekst = '';
		for($i = bz_strlen($text)-1; $i >= 0; $i--)
		{
			$nowytekst .= $text[$i];
		}
		
		return $nowytekst;
	}
	function bz_strlen($text)
	{
		for ($i = 0; isset($text[$i]); $i++)
		{
		}
		return $i;
	}
	
	function is_palindrom($text)
	{
		if(in_strrev($text)== $text)
		{
			return 'jest';
		}
		else 
		{
			return 'nie';
		}
	}
	
	
	/*$s ="www.mistrzowie.org";
 
	$test = strpos($s, 'mistrzowie.org');
 
	if ($test === false) 
	{
   		echo "nie OK";
	} 
	else 
	{
   		echo "OK";
	}
	
	*/