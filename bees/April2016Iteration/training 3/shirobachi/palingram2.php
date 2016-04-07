<?php

	function sh_strlen($string)
	{
		for($i=0; isset($string[$i]); $i++)
		{
			//tutaj nic nie trzeba wpisywac gdyz ilosc iteracji bedzie jednoczesnie iloscia indeksow w stringu.
		}
		return $i;
	}

	function sh_strrevforpali($word)
	{
		$newword; //to nie jest deklaracja zmiennej ? 
		
		for($i=sh_strlen($word)-1; $i>=0; $i--)
		{
			if($word[$i]!=" ")
			{
				$newword .= $word[$i];				
			}		
		}
		
		return $newword;
		
	}
	
	$slowopalingramowe = "ala";
	
	if($slowopalingramowe==sh_strrevforpali($slowopalingramowe))
		echo 'To jest palingram!';
	else 
		echo 'To nie jest palingram!';