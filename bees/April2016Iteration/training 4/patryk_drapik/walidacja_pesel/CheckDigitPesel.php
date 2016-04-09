<?php

	class CheckDigitPesel
	{							
		private $weight = array(9 ,7, 3, 1, 9, 7, 3, 1, 9, 7);
		
		public function checkDigit($pesel)
		{
			if(preg_match("@^\d{11}$@", $pesel))
			{
				return $this->calculatesCheckDigit($pesel);
			}
			else
			{
				return false;
			}
		}
		
		protected function calculatesCheckDigit($pesel)
		{
			$number = substr($pesel, 0, 10);
			$sum = 0;
			
			for($i=0; $i<10; $i++)
			{
				$sum += $number[$i] * $this->weight[$i];
			}

			return $sum % 10 == $pesel[strlen($pesel)-1];
		}
	}
