<?php
	
	require_once 'ValidationDate.php';
	require_once 'CheckDigitPesel.php';

	class ValidationPesel
	{
		private $century = array(
				80 => 18,
				0  => 19,
				20 => 20,
				40 => 21,
				60 => 22,		
		);
		
		private $date = array(
				"year" => 0,
				"month" => 0,
				"days" => 0,
		);
		
		public function checkPesel($pesel)
		{
			if(preg_match("@^\d{11}$@", $pesel))
			{
				$this->generationDate($pesel);
				
				$checkDate = new ValidationDate();
				$checkDigit = new CheckDigitPesel();
 
				return $checkDate->checkDate($this->date) && $checkDigit->checkDigit($pesel);
			}
			else
			{
				return false;
			}
		}
		
		protected function generationDate($pesel)
		{
			$this->cutOnSlices($pesel);
			$month = $this->date["month"];
			
			foreach ($this->century as $key => $value)
			{
				if($month > $key && $month <= $key + 12)
				{
					$this->date["month"] -= $key;
					$this->date["year"] =  $value. $this->date["year"];
				}
			}	
		}
		
		protected function cutOnSlices($pesel)
		{
			$index = 0;
			
			foreach ($this->date as &$value)
			{
				$value = substr($pesel, $index, 2);
				
				$index += 2;
			}
		}
	}
	
	
	$test = new ValidationPesel();
	$test = $test->checkPesel("49323001580");
	
	var_dump($test);