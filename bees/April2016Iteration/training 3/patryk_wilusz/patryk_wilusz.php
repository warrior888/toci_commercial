<?php
	$slowo = 'masturbacja';
	$szukany = 'acj';
	echo "Badane slowo: $slowo \n";
	echo "Dlugosc slowa: ".bz_strlen($slowo)." \n";
	echo "Odwrocone slowo: ".in_strrev($slowo)."\n";
	echo "Czy slowo jest palindromem: ".is_palindrom($slowo)."\n";
	echo "Pozycja szukanego tekstu: ".s_strpos($slowo, $szukany)."\n";
	echo "Funkcja substr: ".s_substr($slowo, 3, 5)."";

	function s_substr($text, $start, $dlugosc = Null)
	{
		if($start < 0)
		{
			$start = bz_strlen($text)+$start;
		}
		if(!isset($dlugosc))
		{
			$dlugosc = bz_strlen($text);
		}
		elseif($dlugosc < 0)
		{
			$dlugosc = bz_strlen($text)+$dlugosc-$start;
		}

	
		$zwroc = "";
		for($i = $start; $i <= ($start+$dlugosc-1); $i++)
		{
			if(isset($text[$i])) $zwroc .= $text[$i];
		}
		return $zwroc;
	}
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
		if(in_strrev($text) == $text)
			return 'Tak';
		else 
			return 'Nie';
	}
	
	function s_strpos($text, $szukany)
	{
		$dl_szukanego = bz_strlen($szukany);
		for($i=0, $j = 0; $i < bz_strlen($text); $i++)
		{
			if($text[$i] == $szukany[$j])
			{
				$j++;
				if($dl_szukanego == $j)
				{
					return $i+1-$j;
				}
			}
		}
		return "Nie znaleziono.";
	}
