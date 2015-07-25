<?php

	$wartosc = 5; // 1 30   0 31 -> Wartosc jest zla   1 - 30  1 - 7 -> pierwszy tydzien 8 - 14 drugi, 29 - 30 pi¹ty
	
	if ($wartosc < 1 || $wartosc > 30)
	{
		echo 'Wartosc jest zla';
	}
	else // 1 - 30
	{
		echo 'wartosc jest ok, szukamy glebiej'."\n";
		
		if ($wartosc >= 1 && $wartosc <= 7)
		{
			echo 'pierwszy tydzien';
		}
		// 8 14 
		// 15 21
		// 22 - 28
		// 29 - 30
	}
	
	