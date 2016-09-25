<?php

	function GetCode()
	{
		$handle = fopen('banki.txt', 'rw');
		$result = '';
		
		while($line = fgets($handle))
		{
			//var_dump($line);
			$codeAndBank = explode(" \t", $line);
			
			//var_dump($codeAndBank);
			$result .= '\''.$codeAndBank[0].'\' => \''.trim($codeAndBank[1]).'\', ';
		}
		
		return $result;
	}
	
	echo GetCode();
	
	function ValidatePesel($peselCandidate)
	{
		substr($peselCandidate, 0, 2);
		// 84 08 08
		
		ValidateDate();
		
		//wiki
	}
	
	function ValidateDate($year, $month, $day)
	{
		
	}
	
	function GenerateMinesweeperTable($dimx, $dimy, $bombsNumber)
	{
		array(array(), array());
		// 0 0 0 0 0 0 0 0 0 0
		// 
		//          -1
		array();
		
		rand(0, $dimx - 1);
		rand(0, $dimy - 1);
	}
	
	function Show()
	{
		echo "0 1 -1 -1 1 0 0 \n";
		echo "0 1  2  2 1 0 0 \n";
	}