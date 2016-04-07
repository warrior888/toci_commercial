<?php
	
	function pd_strtr($string, $from, $to)
	{
		for($i = 0; $i < strlen($string); $i++)
		{
			for($j = 0; $j < strlen($from); $j++)
			{
				if($string[$i] == $from[$j] && isset($to[$j]))
				{
					$string[$i] = $to[$j];
				}
			}
		}
		
		return $string;
	}
	
	/*
	$string = "kobyla ma maly bok";
	$from = "koabm";
	$to = "KOABMaa";
	
	$moje = pd_strtr($string, $from, $to);
	$system = strtr($string, $from, $to);
	
	if($moje == $system)
	{
		echo "Tak";
	}
	else 
	{
		echo "Nie";
	}
	*/
	