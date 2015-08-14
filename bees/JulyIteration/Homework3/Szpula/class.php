<?php

		class BankFunctions
		{
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
		}
		
		$ins = new BankFunctions();
		$ins -> Space('92876345687946393856298562579');
		
		class DetailedBankFunctions extends BankFunctions
		{
			function Swap($accNumber)
			{
				$result = '';
				
				for($i = 0; $i < strlen($accNumber); $i+=2)
				{
					$result .= $accNumber[$i + 1] . $accNumber[$i];
				}
				
				return $result;
			}
			
		}
		$ins = new DetailedBankFunctions();
		$ins -> Swap('92876345687946393856298562579');
		
		

?>