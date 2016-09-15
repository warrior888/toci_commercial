<?php
	// 1. 
	
	function GetBankName($bankAccountNumber) // wyciac znaczki od 2 do 6 10 1020 435234
	{
	$bankAccountNumber= str_split($bankAccountNumber);
	
	$tmp="";
	$res="";
	//usuniecie spacji
	foreach ($bankAccountNumber as $value) 
	{	
		if ($value!=" " && $value!="-")
			$tmp.=$value;
	}
	
	//weryfikacja czy numer ma oczekiwana dlugosc
	
	if (strlen($tmp)<20)
		return -1;
		
	//wybranie tylko znaków od pozycji 2 do 6
		for($i = 0; $i < strlen($tmp); $i++)
		{
		if ($i>=2 && $i<=7)
			$res.=$tmp[$i];
		}
		return $res;
	}
	
	//echo GetBankName('10 10 20 435234847575757847657857464744');
	
	
	
	// 2.
	
	function FormatAccountNumber($bankAccountNumber) //1010204839252734584734 
													// => 10 1020 4839 2527 3458 4734
	{
		
		$bank = str_split($bankAccountNumber);

		$retVal="";
			
			for ($i=0; $i < strlen($bankAccountNumber); $i++) // Warning: strlen() expects parameter 1 to be string, on line 41
			{
		
				//if ((($i+2) % 4) == 0)
				if ((($i+2) & 0x03) == 0) // 0x system szesnastkowy , 03 to czwórka w heksadecymalnym 
				{ 
					$retVal .= " ";
				}
					$retVal .= $bank[$i];
			}			
	
		return $retVal; 
	}
	echo FormatAccountNumber('1010204839252734584734');
	
	
	
	// 3. 
	
	function GetMoneyValue($value) // *
	{
	
	$tmp="";
	
		foreach ($value as $value) 
	{	
		if ($value!=" " && $value!="-")
			$tmp.=$value;
	}
	
	
		
		// 123 456 123 
		// sto dwadziescia trzy miliony czterysta piecdziesiat szesc tysiecy sto dwadziescxia trzy
	}
	
	//echo GetMoneyValue('123 456 123');