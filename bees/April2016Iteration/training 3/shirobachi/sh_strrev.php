<?php

	function sh_strlen($string)
	{
		for($i=0; isset($string[$i]); $i++)
		{
			//tutaj nic nie trzeba wpisywac gdyz ilosc iteracji bedzie jednoczesnie iloscia indeksow w stringu.
		}
		return $i;
	}

	function sh_strrev($word)
	{
		$newword;
		
		for($i=sh_strlen($word)-1; $i>=0; $i--)
		{
			$newword = $newword . $word[$i];
		}
		
		return $newword;
		
	}
	
	$text = "abcdef";
	
	echo $text . " - " . sh_strrev($text);
	