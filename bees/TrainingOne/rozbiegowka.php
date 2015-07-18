<?php 

	// kajak radar 
	
	// burda bruda  aabb baba   cacy  cyca   aaaabbbb abababab
	
	// true false
	
	function CzyPalindrom($kandydat) 
	{
		//echo $kandydat[3];
		
	// true true => true
	// false true => false
	// true false => false
	// false fasle false
		return $kandydat[0] == $kandydat[4] && $kandydat[1] == $kandydat[3];
	}
                //01234 
	CzyPalindrom('s³owo');
	$result = CzyPalindrom('kajjak'); // true false
	var_dump($result);
	
	function CzyAnagram($kand, $kand2)
	{
		
	}
exit;
	$rok = 2015;
	
	// 
	
	if ($rok >= 2015) // false true
	{
		$rok = 2016;
	}
	
	//echo $rok;
	
	
	$licznikGorny = 4;
	$licznikSrodkowy = 0;
	$licznikDolny = 0;
	
	//++$licznikGorny;
	
	$test = 0;
	
	for($licznikDolny; $licznikDolny < 8; $licznikDolny++)
	{
		for($licznikSrodkowy = 0; $licznikSrodkowy < 8; $licznikSrodkowy++)
		{
			for($licznikGorny = 0; $licznikGorny < 8; $licznikGorny++)
			{
				//echo "Text \n";
				$test++;		
				//$licznikGorny--;
				// 3
				
				if ($licznikGorny == 3)
				{
					//break 2;
				}
			}
			
		}
	}
	
	//echo $test;
	
	
	$ciekawa = 'piekna';
	
	$piekna = 'slicznie';
	
	$slicznie = 'ciekawa';
	
	//echo $$piekna;
	
	//Pierwsza();
	$panRada = 'Pierwsza';
	
	$fn = "$panRada $panRada"; // " '
	
	//$fn();
	
		function Pierwsza()
		{
			//echo 'pierwsza dziala';
		}
	
	
	$text = 'slowo';
	//$text = 5;
	
	
	$text =  $text . $text;
	
	//echo $text;
	
	$tablica = array(2,3,54,56,4,3,35,array("fgdwghefhe", 4,5,4,6));
	
	$tablicaIndexowanaCustomowo = array('dzien dobry' => $tablica, 2 => 5, 'klucz' => 'cyrk', 8, 5 => 12, 4 => 4, 9 => 234, 8 => 234, 123); // 0  3
	
	// 0xfffdd33  0x321434  => 0xfffdd33
	$tablicaIndexowanaCustomowo['cyrk z kosmosu'] = &$tablicaIndexowanaCustomowo;
	
	//var_dump($tablicaIndexowanaCustomowo);
	
	$asoc = array(
		'klucz' => 'wartosc',
		'adsf' => array($tablicaIndexowanaCustomowo),
		'klucz' => 'test'
	);
	
	//var_dump($tablicaIndexowanaCustomowo);
	
	//drkujTabliceTablic($tablicaIndexowanaCustomowo);
	
	function drkujTabliceTablic($tablicaIndexowanaCustomowo)
	{
		foreach ($tablicaIndexowanaCustomowo as $key => $value)
		{
			if (is_array($value))
			{
				echo "Trafi³em tablice ! \n";
				drkujTabliceTablic($value);
			}
			else
			{
				echo 'Klucz to: ' . $key . ' a wartosc to : ' . $value."\n";
			}
		}
	}
	
	//var_dump($asoc);
	
	//var_dump($tablica);
	
	//echo $tablica;
	
	
	// 12 1020 321431413
	// 32 1030 2411343131
	// 
	
	function ZwrocBank($numerKonta) {
	
		$wycinek = substr($numerKonta,2,4);
	
		return 'Ing';
	}
	
	
	
	
	
	
	
	
	