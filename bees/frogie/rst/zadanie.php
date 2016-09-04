<?php

	class RstTask
	{
		public function GetListOfNumbersWithPowers($arrayOfNumbers, $powerLimit)
		{
			$result = array();
			foreach($arrayOfNumbers as $number)
			{
				if ($number * $number > $powerLimit)
				{
					$result[] = $number;
				}
			}
			
			return $result;
		}
	}
	
	class RstTaskTest
	{
		public function GetListOfNumbersWithPowersTest()
		{
			$candidates = array(
				array('arrayOfNumbers' => array(5,4,3,6,7,8,1,2,11), 'powerLimit' => 26, 'sizeOfReturnArray' => 4),
				array('arrayOfNumbers' => array(12,13,5,4,15,18,2,11), 'powerLimit' => 26, 'sizeOfReturnArray' => 5),
			);
			
			$rstTask = new RstTask();
			$testResult = true;			
			foreach ($candidates as $testCandidate)
			{
				$result = $rstTask->GetListOfNumbersWithPowers($testCandidate['arrayOfNumbers'], $testCandidate['powerLimit']);
				$testResult = $testResult && (count($result) == $testCandidate['sizeOfReturnArray']);
			}
			
			return $testResult;
		}
	}
	
	$RstTaskTest = new RstTaskTest();
	
	$result = $RstTaskTest->GetListOfNumbersWithPowersTest();
	
	if ($result)
	{
		echo "Metoda GetListOfNumbersWithPowers dzia³a prawid³owo \n";
	}
	else
	{
		echo "Metoda GetListOfNumbersWithPowers dzia³a nieprawid³owo \n";
	}