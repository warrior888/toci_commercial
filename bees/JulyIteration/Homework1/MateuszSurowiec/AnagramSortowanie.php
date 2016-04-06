<?php

	function EmesSort ($tablica)
	{
		for($i = 0; $i < sizeof($tablica); $i++)
		{
			for($j = $i;$j < sizeof($tablica);$j++)
			{
				if ($tablica[$i] < $tablica[$j])
				{
					$temp = $tablica[$i];
					$tablica[$i] = $tablica[$j];
					$tablica[$j] = $temp;
					//echo "Sprawdzam: " . $tablica[$i] . " z " . $tablica[$j];
				}
			}
		}
		
		return $tablica;
		
	}
	
	$tablica = array(3,6,123,56,352,62,5);
	var_dump(EmesSort($tablica));