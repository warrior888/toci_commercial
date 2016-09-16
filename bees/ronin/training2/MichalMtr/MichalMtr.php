<?php

	// ----------------------------------------------------------------------------------------------------
	// Programming Course: PHP Basics (bees), by Bartłomiej Zapart (TOCI), September 2016.
	// Homework after Training 2 session, dated 2016.09.11.
	//
	// Author:	MichalMtr (mtr180deg)
	// Level:	Beginner
	// Status:	TBD
	// Revised: 2016-09-12 xx:xx
	// ----------------------------------------------------------------------------------------------------

	
	// ----------------------------------------------------------------------------------------------------
	// Identify Bank name from Bank Identyfying Number (characters from 3 to 6 of the Bank Account Number).
	// Note: Without BIN validation!
	// More info: http://www.nbp.pl/homen.aspx?f=/en/banki_w_polsce/ewidencja/pytania_odpowiedzi_en.html
	// Bank List (limitedS) derived from: http://www.nbp.pl/banki_w_polsce/ewidencja/dz_bank_jorg.txt
	// ----------------------------------------------------------------------------------------------------
		
	$bankAccountNumber = '73101010230000261395300000';
	
	echo "\nAccount number: " . $bankAccountNumber . " is assigned to: " . GetBankName($bankAccountNumber) . ".\n";
	
	function GetBankName($bankAccountNumber)
	{
		$bankTable =  array(
			'1020' => 'Powszechna Kasa Oszczednosci Bank Polski SA',
			'1030' => 'Bank Handlowy w Warszawie SA',
			'1010' => 'Narodowy Bank Polski',
			'1050' => 'ING Bank Slaski SA',
			'1060' => 'Bank BPH SA',
			'1090' => 'Bank Zachodni WBK SA',
			'1130' => 'Bank Gospodarstwa Krajowego',
			'1140' => 'mBank SA',
			'1160' => 'Bank Millennium SA',
			'1220' => 'Bank Handlowo - Kredytowy SA',
			'1240' => 'Bank Polska Kasa Opieki SA',
			'1280' => 'HSBC Bank Polska SA',
			'1300' => 'Alior Bank SA',
			'1320' => 'Bank Pocztowy SA',
			'1370' => 'DNB Bank Polska SA',
			'1440' => 'Powszechna Kasa Oszczednosci Bank Polski SA',
			'1460' => 'Getin Noble Bank SA',
			'1470' => 'Euro Bank SA',
			'1500' => 'Bank Zachodni WBK SA',
			'1540' => 'Bank Ochrony Srodowiska SA',
			'1560' => 'Getin Noble Bank SA',
			'1580' => 'Mercedes-Benz Bank Polska SA',
			'1600' => 'Bank BGz BNP Paribas SA',
			'1610' => 'SGB-Bank SA',
			'1670' => 'RBS Bank (Polska) SA',
			'1680' => 'PLUS BANK SA',
			'1710' => 'Bank BPH SA',
			'1750' => 'Raiffeisen Bank Polska SA',
			'1840' => 'Societe Generale SA Oddzial w Polsce',
			'1870' => 'FM Bank PBP SA',
			'1880' => 'Deutsche Bank Polska SA',
			'1890' => 'Pekao Bank Hipoteczny SA',
			'1910' => 'Deutsche Bank Polska SA',
			'1930' => 'BANK POLSKIEJ SPolDZIELCZOsCI SA',
			'1940' => 'Credit Agricole Bank Polska SA',
			'1950' => 'Idea Bank SA',
			'1960' => 'Santander Consumer Bank SA',
			'2000' => 'Bank BGz BNP Paribas SA',
			'2030' => 'Bank BGz BNP Paribas SA',
			'2070' => 'FCE Bank Polska SA',
			'2120' => 'Santander Consumer Bank SA',
			'2130' => 'VOLKSWAGEN BANK POLSKA SA',
			'2140' => 'FCA-Group Bank Polska SA',
			'2150' => 'mBank Hipoteczny SA',
			'2160' => 'Toyota Bank Polska SA',
			'2190' => 'DNB Bank Polska SA',
			'2210' => 'Bank of Tokyo-Mitsubishi UFJ (Polska) SA',
			'2240' => 'Banque PSA Finance SA Oddzial w Polsce',
			'2250' => 'Svenska Handelsbanken AB SA Oddzial w Polsce',
			'2260' => 'RCI Banque Spolka Akcyjna Oddzial w Polsce',
			'2270' => 'Bank BGz BNP Paribas SA',
			'2290' => 'BPI Bank Polskich Inwestycji SA',
			'2320' => 'Nykredit Realkredit A/S SA - Oddzial w Polsce',
			'2340' => 'Raiffeisen Bank Polska SA',
			'2350' => 'BNP PARIBAS SA Oddzial w Polsce',
			'2360' => 'Danske Bank A/S SA Oddzial w Polsce',
			'2370' => 'Skandinaviska Enskilda Banken AB (SA) - Oddzial w Polsce',
			
		);
		
		return $bankTable[substr($bankAccountNumber, 2, 4)];
	}
	
	
	// ----------------------------------------------------------------------------------------------------
	// Converts the 26 digits bank account number (also called BIN) into space-separated number.  
	// Example: 10102048392527345847342589 -> 10 1020 4839 2527 3458 4734 2589
	// ----------------------------------------------------------------------------------------------------
	$bin = '73101010230000261395300000';
		
	echo "\nAccount number with spaces: " . FormatAccountNumber($bin) . "\n";
			
			
	function FormatAccountNumber($bankAccountNumber)
	{
		if (strlen($bankAccountNumber) != 26)
			{
				return -1; // error indicator
			}
			
			else
			{
				$result = '';
				
				for ($i=-4; $i>-25; $i-=4)  // Backward loop- starts from fourth digit from the end, iter 4.
				{
					$result = substr($bankAccountNumber, $i, 4) . " " . $result;
				}
				
				$result = substr($bankAccountNumber, 0, 2) . " " . $result;
			}
					
		return $result;
	}
	
			
	// ----------------------------------------------------------------------------------------------------
	// Convert the given number to its verbal representation.  
	// Example: 123 456 123 -> sto dwadziescia trzy miliony czterysta piecdziesiat szesc tysiecy sto dwadziescxia trzy
	//
	// The idea (not mine actually) is to iterate through the value and check each three numbers starting from right, 
	// as the declension for such group is the same no matter tne order of magnitude. In each group to determine 
	// the number of ones, tens, hundreds and teens <11;19> and assign proper declension - different, depending the value. 
	// Then to determine the order of magnitude for each of the groups and assign propeer numeral.  
	// Note: Without value validation!
	// ----------------------------------------------------------------------------------------------------
	$moneyValue = 113409034412;		// Value to be converted into words.
	
	if (is_numeric($moneyValue))
	{
		echo "\nVerbal representation of the number: " . $moneyValue . " is: " . GetMoneyValue($moneyValue) . "\n";
	}
	else
	{
		echo "\nPlease enter proper value.\n";
	}

	
	function GetMoneyValue($value)
	{
		// Declension groups: [0] for singular, [1] for all 2,3,4 excluding numbers <11 to 19>, [3] for remaining. 
		$declensionTbl = array(
		array('', '', ''),
		array('tysiac ', 'tysiace ', 'tysiecy '),
		array('milion ', 'miliony ', 'milionow '),
		array('miliard ', 'miliardy ', 'miliardow '),
		array('bilion ', 'biliony ', 'bilionow '),
		array('biliard ', 'biliardy ', 'biliardow '),
		);
		
		$onesTbl = array(
		'', 
		'jeden ', 
		'dwa ', 
		'trzy ', 
		'cztery ', 
		'piec ', 
		'szesc ', 
		'siedem ', 
		'osiem ', 
		'dziewiec '
		);
		
		$teensTbl = array(
		'',
		'jedenascie ',
		'dwanascie ',
		'trzynascie ',
		'czternascie ',
		'pietnascie ',
		'szesnascie ',
		'siedemnascie ',
		'osiemnascie ',
		'dziewietnascie ',
		);
		
		$tensTbl = array(
		'',
		'dziesiec ',
		'dwadziescia ',
		'trzydziesci ',
		'czterdziesci ',
		'piecdziesiat ',
		'szescdziesiat ',
		'siedemdziesiat ',
		'osiemdziesiat ',
		'dziewiecdziesiat ',
		); 
		
		$hundredsTbl = array(
		'',
		'sto ',
		'dwiescie ',
		'trzysta ',
		'czterysta ',
		'piecset ',
		'szescset ',
		'siedemset ',
		'osiemset ',
		'dziewiecset ',
		);
		
		$result = ''; 			// Number converted into words.
		$orderOfMagnitude = 0; 	// Indicator - either none or thousand or million etc.  
				
				
		// Unique case for zero.
		if ($value == 0)
		{
			return 'zero';
		}			
		
		// All cases except zero case. Start the verification from the right side, for each three numbers.
		while ($value > 0) 						// Or "for (;$value > 0;){}"
		{
			// Determine the value of "ones", "tens" and "hundreds".
			$ones = fmod($value, 10);					// Simple % didn't work with large numbers
			$tens = (int)(fmod($value, 100) / 10);
			$hundreds = (int)(fmod($value, 1000) / 100);
			
			// Check if numbers <11 to 19> appear.
			if ($ones > 0 && $tens == 1) 
			{
				$teens = $ones;  				// Numbers <11 to 19> will have the same index as "ones".
				$ones = 0;						// No conversion of "ones" hence...
				$tens = 0;						// ... neither "tens".  
			}
			else 
			{
				$teens = 0;		 
			}
			
			// Set declension scenario.
			if ($ones == 1 && $teens + $tens + $hundreds == 0) // Only "ones", no other numbers.
			{
				$declension = 0;  	// tysiąc...
			}
			elseif ($ones == 2 || $ones == 3 || $ones == 4) 
			{
				$declension = 1;  	// tysiące...
			}
			else
			{
				$declension = 2; 	// tysięcy...
			}
			
			// Convert the number to words.
			if ($ones + $teens + $tens + $hundreds > 0)  // Is there at all anything to convert in this loop. 
			{
				$result = $hundredsTbl[$hundreds] . $tensTbl[$tens] . $teensTbl[$teens] . $onesTbl[$ones] . 
						  $declensionTbl[$orderOfMagnitude][$declension] . $result;
			}
			
			$orderOfMagnitude++;
			$value = floor($value / 1000); // Cut three digits from value -> check next hree numbers (counting right to left).
			
		}
		
		return $result;
				
	}	
?>