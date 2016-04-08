<?php

	class Numerals
	{
		private $numerals = array(
				"",
				"tys" => array("tysi¹c", "tysiêcy", "tysi¹ce"),
				"milion",
				"miliard",
				"bilion",
				"biliard",
				"trylion",
				"tryliard",
				"kwadrylion",
				"kwadryliard",
				"kwintylion",
				"kwintyliard",
				"sekstylion",
				"sekstyliard",
				"septylion",
				"septyliard",		
		);
		
		private $caps = array(
				"",
				"ów",
				"y",
		);
		
		public function numeralsVerbally($slicesNumberVerbally, $slicesNumber)
		{
			return $this->managerNumeralsVerbally($slicesNumberVerbally, $slicesNumber);
		}
		
		protected function managerNumeralsVerbally($slicesNumberVerbally, $slicesNumber)
		{
			$numberVerbally = "";
			$sizeNumber = "";
			$index = 0;

			for($i = count($slicesNumber) - 1; $i >= 0; $i--)
			{
				if($slicesNumber[$index] > 0)
				{
					if($i == 1)
					{
						$sizeNumber = $this->numerals["tys"][$this->checkVariety($slicesNumber[$index])];
						$numberVerbally .= $slicesNumberVerbally[$index]. $sizeNumber." ";	
					}
					else if($i > 1)
					{
						$sizeNumber = $this->numerals[$i - 1]. $this->caps[$this->checkVariety($slicesNumber[$index])];
						$numberVerbally .= $slicesNumberVerbally[$index]. $sizeNumber." ";
					}
					else 
					{
						$numberVerbally .= $slicesNumberVerbally[$index];
					}
				}
				
				$index++;
			}
			
			return $numberVerbally;
		}
		
		protected function checkVariety($number)
		{
			$number = (int)$number;
			
			if($number > 0)
			{
				$lastNumber = (int)substr($number, -1);

				if($number == 1)
				{
					return 0;
				}
				else if(($number > 9 && $number < 22) || ($lastNumber < 2 && $number > 9) || ($lastNumber > 4 && $lastNumber < 10))
				{
					return 1;
				}
				else if($lastNumber > 1 && $lastNumber < 5)
				{
					
					return 2;
				}
			}
			else
			{
				return 0;
			}
		}
	}