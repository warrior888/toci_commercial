<?php

	function rekurencja($liczba)
	{
		/*
		 if(n<2)
        return 1; //silnia z 0 i 1 wynosi 1
 
return n*silnia(n-1);
		 */
		if ($liczba < 2)
		{
			return 1;
		}
		
		return rekurencja($liczba - 1) * $liczba;

		//8 * 7 * 6 * 5 * 4 * 3 * 2 *1 
		
		
		
	}
	
//echo 	rekurencja(8);

	$tablica = array('Beata' => array('Wiktor' => array('Antoni' => array('Malwina', 'Krzysztof'), 'Karol'), 'Marzena', 'Dominika'), 
					 'Aneta' => array('Miko³aj', 'Albert'));
	
	var_dump($tablica);
	
	// prababcia beata
	// dziadek wiktor
	// tata antoni
	// corka malwina