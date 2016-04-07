<?php

	function sh_strlen($string)
	{
		for($i=0; isset($string[$i]); $i++)
		{
			//tutaj nic nie trzeba wpisywaæ gdy¿ iloœæ iteracji bêdzie jednoczesnie iloscia indeksow w stringu.
		}
		return $i;
	}

	function Palindram($word)
	{
		$j=sh_strlen($word)-1;
		$i=0;
		for(;;)
		{
			if($i<$j)
			{
				if($word[$i]==$word[$j])
				{
					$i++; $j--;
				}
				else
				{
					return "NIE";
				}
			}
			else 
			{
				return "TAK";
			}
		}
	}
	
	
	$mypalingram = "ala";
	
	echo "Czy to sa palindramy?!\n";
	echo "$mypalingram: " . Palindram($mypalingram);
	