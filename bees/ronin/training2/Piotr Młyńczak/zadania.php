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
	//echo FormatAccountNumber('1010204839252734584734');
	
	
	
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
	
	
	//Napisz funkcje, ktora zwraca reprezentacje slowna podanego ciagu liczb, np. 1234 zwroci jeden dwa trzy cztery
	
	
	function PodajReprezentacjeSlowna($liczba)
	{
	$liczba = str_split($liczba);
	$tmp ="";
		foreach ($liczba as $v) 
		{	
			switch ($v) {
				case "1":
				$tmp.="jeden ";
				break;
				case "2":
				$tmp.="dwa ";
				break;
				case "3":
				$tmp.="trzy ";
				break;
				case "4":
				$tmp.="cztery ";
				break;
				case "5":
				$tmp.="piec ";
				break;
				case "6":
				$tmp.="szesc ";
				break;
				case "7":
				$tmp.="siedem ";
				break;
				case "8":
				$tmp.="osiem ";
				break;
				case "9":
				$tmp.="dziwiec ";
				break;
				case "0":
				$tmp.="zero ";
				break;		
		}
		}
		return $tmp;
	}
	
	echo PodajReprezentacjeSlowna("67578");
	
	//echo GetMoneyValue('123 456 123');