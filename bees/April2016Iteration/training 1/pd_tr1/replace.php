<?php

	//Funkcja PHP: preg_replace("@\s+@", "", $string); 

	function replace($string)
	{
		$str = "";
		
		for($i=0; $i<length($string); $i++)
		{
			if($string[$i] != " ")
			{
				$str .= $string[$i];
			}
		}
		
		return $str;
	}