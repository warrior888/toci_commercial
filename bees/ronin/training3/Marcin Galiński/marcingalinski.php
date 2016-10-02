<?php
	//1
	$saving = SaveCode(GetCode()) . "\n";
	//2
	//echo ValidatePesel(93051705895) . "\n";
	//3
	//GenerateMinesweeperTable(5,5,5);

	//1 zadanie
	//*************************************************************
	function GetCode()
	{
		$handle = fopen("banki.txt", 'rw');
		$result = "";
		while($line = fgets($handle))
		{
			$codeAndBank = explode(" \t", $line);
			$result .= "'" . $codeAndBank[0] . "' => '" . trim($codeAndBank[1]) . "',";
		}
		return $result;
	}
	
	function SaveCode( $code )
	{
		$handle = fopen("bankiOut.txt" , 'w');
		$result = fwrite($handle,$code);
		return $result;
	}
	
	//2 zadanie
	//*************************************************************
	function ValidatePesel($peselCandidate)
	{
		$date = CutDate($peselCandidate);
		$res = array(
				ValidateDate($date[0],$date[1],$date[2]),
				CyfraKontrolna($peselCandidate)
		);
	
		//echo "Result: " . implode(" " , $res) . "\n\n";
		if($res[0] == 1 && $res[1] == 1)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	
	function ValidateDate($year,$month,$day)
	{
		$day = (int)$day;
		$month = (int)$month;
		$year = (int)$year;
	
		$months = array(
				01 => 31,
				02 => array( "przestepny" => 29 , "normalny" => 28 ),
				03 => 31,
				04 => 30,
				05 => 31,
				06 => 30,
				07 => 31,
				08 => 31,
				09 => 30,
				10 => 31,
				11 => 30,
				12 => 31
		);
	
		if($month == 2)
		{
			if($day <= $months[$month][RokPrzestepny($year)])
			{
				return true;
			}
			else
			{
				return false;
			}
		}
		else
		{
			if( $day <= $months[$month])
				return true;
			else
				return false;
		}
	}
	
	function CutDate($peselCandidate)
	{
		$res = array(
				substr($peselCandidate, 0 , 2),
				substr($peselCandidate, 2 , 2),
				substr($peselCandidate, 4 , 2)
		);
		return $res;
	}
	
	function RokPrzestepny($year)
	{
		if(($year %4 == 0 && $year % 100 != 0) || $year % 400 == 0)
		{
			return "przestepny";
		}
		else
		{
			return "normalny";
		}
	}
	
	function CyfraKontrolna($pesel)
	{
		$pesel = (string)$pesel;
		$control = $pesel[0] + 3*$pesel[1] + 7*$pesel[2] +
					9*$pesel[3] + $pesel[4] + 3*$pesel[5] +
					7*$pesel[6] + 9*$pesel[7] + $pesel[8] +
					3*$pesel[9];
		
		//$control = $control%10;
		$control = 10-($control%10);
		if($control == $pesel[10])
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	
	//3 zadanie
	//*************************************************************
	function GenerateMinesweeperTable($dimx,$dimy,$bombsNumber)
	{
		$plansza = GenerateTable($dimx, $dimy, $bombsNumber);
		//$plansza = WartoscPola($dimx, $dimy, $plansza);
		WriteTable($dimx, $dimy, $plansza);
	}
	
	function WriteTable($dimx,$dimy,$plansza)
	{
		for($i = 0 ; $i < $dimx ; $i++ )
		{
			for($j = 0 ; $j < $dimy ; $j++)
			{
				echo $plansza[$i][$j] . "\t";
			}
			echo "\n";
		}
	}
	
	function GenerateTable($dimx,$dimy,$bombsNumber)
	{
		$plansza = array();
		$bombs = 0;
		for( $i = 0 ; $i < $dimx ; $i++ )
		{
			for($j = 0 ; $j < $dimy ; $j++ )
			{
				$plansza[$i][$j] = 0;
			}
		}
	
		for($i = 0 ; $i < $bombsNumber ; )
		{
			$x = rand(0,$dimx-1);
			$y = rand(0,$dimy-1);
				
			//obsluga powtorki
			if($plansza[$x][$y] != -1 )
			{
				$plansza[$x][$y] = -1;
				$plansza = WartoscPola($x,$y,$plansza);
				$i++;
			}
		}
		return $plansza;
	}
	
	function WartoscPola($i,$j,$plansza)
	{
		/*for($i = 0 ; $i < $dimx ; $i++)
			{
			for($j = 0; $j < $dimy ; $j++)
			{
			if($plansza[$i][$j] == -1)
			{
			for($a = -1 ; $a <= 1 ; $a++)
			{
			for($b = -1 ; $b <= 1 ; $b++)
			{
			if( isset($plansza[$i + $a][$j + $b]) && ($plansza[$i + $a][$j + $b] != -1))
			{
			$plansza[$i + $a][$j + $b]++;
			}
			}
			}
			}
			}
			}*/
	
		for($a = -1 ; $a <= 1 ; $a++)
		{
			for($b = -1 ; $b <= 1 ; $b++)
			{
				if( isset($plansza[$i + $a][$j + $b]) && ($plansza[$i + $a][$j + $b] != -1))
				{
					$plansza[$i + $a][$j + $b]++;
				}
			}
		}
		return $plansza;
	}
?>