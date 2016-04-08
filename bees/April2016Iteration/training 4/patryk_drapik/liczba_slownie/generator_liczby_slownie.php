<?php
	
	require_once 'liczby_slownie.php';
	require_once 'liczebniki.php';

	class GeneratorNumberToVerbally extends NumberWords
	{
		private $nameFunction = array(
				"unityToVerbally",
				"dozensToVerbally",
				"hundredsToVerbally",
		);
		
		public function numberToVerbally($number)
		{
			$slicesNumber = $this->sharingOnSlices($number);
			$numberVerbally = $this->managerNumberToWords($slicesNumber);

			$odmiana = new Numerals();
			
			return $odmiana->numeralsVerbally($numberVerbally, $slicesNumber);
		}
		
		protected function sharingOnSlices($number)
		{
			$slicesNumber = array();
			
			while(strlen($number) > 0)
			{
					$slicesNumber[] = substr($number,-3);
					$number = substr($number, 0, -3);
			}
			
			return array_reverse($slicesNumber);
		}
		
		protected function managerNumberToWords($slicesNumber)
		{
			$numberVerbally = array();

			foreach ($slicesNumber as $value)
			{
				$nameFunction = $this->nameFunction[strlen($value) - 1];
				$numberVerbally[] = $this->$nameFunction($value);
			}
			
			return $numberVerbally;
		}
		
		protected function unityToVerbally($number)
		{
			return $this->unity[$number];
		}
		
		protected function dozensToVerbally($number)
		{
			if($number > 9 && $number < 20)
			{
				return $this->unity[$number];
			}
			else
			{
				return $this->dozens[substr($number, 0, 1)]. $this->unity[substr($number, -1)];
			}
		}
		
		protected function hundredsToVerbally($number)
		{
			return $this->hundreds[substr($number, 0, 1)]. $this->dozensToVerbally(substr($number, -2));
		}
	}
	
	
	$test = new GeneratorNumberToVerbally();
	echo $test->numberToVerbally('847848948974651897000000'); 
