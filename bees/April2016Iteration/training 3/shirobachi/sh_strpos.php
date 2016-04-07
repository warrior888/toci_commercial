<?php

function sh_strlen($string)
{
	for($i=0; isset($string[$i]); $i++)
	{
		//tutaj nic nie trzeba wpisywac gdyz ilosc iteracji bedzie jednoczesnie iloscia indeksow w stringu.
	}
	return $i;
}

function sh_strpos($word, $cut)
{
	for($i=0; $i<=sh_strlen($word)-1; $i--)	
	{
		if($word[$i]==$cut[0])
		{
			for($j=1; i<=sh_strlen($cut); $j--)
			{
				if($cut[sh_strlen($cut)-1]==$word[i+sh_strlen($cut)])
				return $i;
				else if($cut[sh_strlen($cut)-1]!=$word[i+sh_strlen($cut)])
				return false;
			}
		}
		
		
	}
	
}