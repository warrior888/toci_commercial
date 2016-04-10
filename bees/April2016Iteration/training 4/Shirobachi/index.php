<?php
	/*

	$rok = 2016;
	$rok = "jakis text";
	
	echo $rok;
	
	$rok = 5;
	
	echo "\n\n" . $rok . "\n\n\n";
	
	$rok = 2015;
	
	if(123==123131) 
	{
		$rok = 2016;
	}
	
	$licznikGorny = 0;
	$licznikSrodkowy = 0;
	$licznikDolny = 0;
	
	$tekst = 0;
		
		for($licznikGorny = 0; $licznikGorny < 8; $licznikGorny++)
			{
				echo 'text' . "\n";
				$tekst++;
				//$licznikGorny--;
				
				//if($licznikGorny == 3)
				//{
				//	break;
				//}
				
			}
	
	echo $tekst;
	
	$ciekawa = 'piekna';
	$piekna = 'sliczna';
	$sliczna = 'ciekawa';
	
	//echo $$$$$$$$$$$$$$$$$$$$$$$ciekawa;
	
	//pierwsza();
	$fn = 'pierwsza';
	
	$fn();
	
	function Pierwsza()
	{
		echo 'pierwsza dziala';		
	}
	
	
	$text = 'slowo';
	
	echo $text.$text; // konkatenacja

	$tablica = array(12,5,1,5,7,45,1,5,55); //utworzenie tablicy
	
	var_dump($tablica); //podejrzebnie wszystkich szufladek i ich typow (uzywany przy debagowaniu)
	
 
	$tablica = array(12,5,1,5,array(45,1,5,55)); //utworzenie tablicy z tablica w tablicy
	
	var_dump($tablica); //podejrzebnie wszystkich szufladek i ich typow (uzywany przy debagowaniu)
	

	$tablica = array (2 => 5, 1=>3, 6,12);
	var_dump($tablica);
	
	$tablica = array('klucz' => 'cyrk');  //asociacia .. 
	var_dump($tablica);

	*/

	$tablica = array(12,5,1,5,array(45,1,5,55));

	foreach ($tablica as $key => $value)
	{
		if(is_array($value))
		{
			echo "Stary to jest tablica ;) \n";
		}
		
		echo $key . '=>' . $value . "\n";
	}
 



















	
	
	
	
	
	
	
	
	
	
	
	
	
	
	