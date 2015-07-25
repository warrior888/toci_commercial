<?php

	$wartosc = 5; // 1 30   0 31 -> Wartosc jest zla   1 - 30  1 - 7 -> pierwszy tydzien 8 - 14 drugi, 29 - 30 pi¹ty
	
	/*if ($wartosc < 1 || $wartosc > 30)
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
	
	*/
	
	echo 'wartosc  = ' . $wartosc."\n";
	
	$licznikObejscPetli = 0;
	
	for ($i = 0; $i <= $wartosc; $i++, $wartosc--) // 0 5, 1 5, 3 5, 4 5 , 5 <= 5 => true
	{
		//i = 0 wartosc = 5 1, i = 1 wartosc = 4 2, 2 3 3
		echo 'zmienna i = '.$i."\n";
echo 'zmienna $wartosc = '.$wartosc."\n";

		if ($i == 2)
		{
			echo 'dwa'."\n";
		}
		
		if ($i == 1)
		{
			echo 'jeden'."\n";
		}
		
		/*$i = (int)($i / 2);
		
		$licznikObejscPetli++;
		
		if ($licznikObejscPetli > 1000){
			echo 'przebilem 1000'."\n";
			break;
		}*/
	} //podbijanie i, i zbijanie wartosc
	
	//121  jeden dwa jeden
	