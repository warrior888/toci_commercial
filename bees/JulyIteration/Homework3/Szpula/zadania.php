<?php
		//zad 1 dodac spacje co 4
		function Space($accNumber)
		{
			$result = '';
			for($i = 0; $i < strlen($accNumber); $i++)
			{
				$result .= $accNumber[$i];
				if($i % 4 == 3)
				{
					$result .= ' ';
				}
			}
			return $result;
			
		}
		
		
		
		//zad 2 zamiana
		
		function Swap($accNumber)
		{
			$result = '';
			for($i = 0; $i < strlen($accNumber); $i+=2)
			{
				$result .= $accNumber[$i + 1] . $accNumber[$i];
			}
			return $result;
		}
		
		
		
		//zad 2a spacja i zamiana
		
		function SpaceSwap($accNumber)
		{
			return Space(Swap($accNumber));
		}
		
		
		
		//zad 3 szyfrowanie
		
		function Encryption($accNumber)
		{
			
			$result = [];
			
			$cipher = array(2, 5, 0, 3, 25, 4, 23, 20, 15, 14, 10, 1, 6, 24, 11, 8, 18, 22, 12, 7, 19, 16, 21, 13, 9, 17);
			
			foreach($cipher as $key => $element)
			{
				$result[$key] = $accNumber[$element];
			}
			
			return $result;
		}
		
		
		
		//zad 4
		
		function Decryption($accNumber)
		{
			$accNumberTab = str_split($accNumber);
			$result = [];
			$result = array_fill(0, count($accNumberTab), 1);
			
			$cipher = array(2, 5, 0, 3, 25, 4, 23, 20, 15, 14, 10, 1, 6, 24, 11, 8, 18, 22, 12, 7, 19, 16, 21, 13, 9, 17);
			
			foreach($cipher as $key => $element)
			{
				$result[$element] = $accNumberTab[$key];
			}
			
			return $result;
		}
		
		
		
		
		
		
		//echo Space('92876345687946393856298562579');
		
		//echo Swap('856298249825642985682965824685');
		
		//echo SpaceSwap ('34562768526352378526527358742');
		
		//zad 3 i 4
		//$testValue = '12345678912345678912345678';
		
		//$testEncryption = Encryption($testValue);
		//$testEncyrptionString = implode('',$testEncryption);
		//echo $testEncyrptionString."\n\n";
		
		//$testDecryption = Decryption($testEncyrptionString);
		//$testDecryptionString = implode('',$testDecryption);
		//echo $testDecryptionString;

?>