<?php 

//echo ValidatePesel(94080303262) . "\n";

function ValidatePesel($peselCandidate)
{
	$liczba = strlen((string)$peselCandidate);
	if($liczba == 11)
	{
		$year = substr($peselCandidate, 0, 2);
		//echo $year;
		$year = (int)$year;
		
		$month = substr($peselCandidate, 2, 2);
		//echo $month;
		$month = (int)$month;
		//var_dump($month);
		
		$day= substr($peselCandidate, 4, 2);
		//echo $day;
		$day = (int)$day;
		
		$dateFlag = 1;
		
		if($month>12 || $month<1)
		{
			$dateFlag = 0;
		}
		
		switch($month)
		{
			case 1:
				if($day < 1 || $day > 31)
				{
					$dateFlag = 0;
				}
				
			case 2:
				if(($year%4==0 && $year%100!=0) || $year%400==0)
				{
					if($day <1 || $day > 29)
					{
						$dateFlag = 0;
					}
				}
				else
				{
					if($day <1 || $day > 28)
					{
						$dateFlag = 0;
					}
					
				}
			case 3:
				if($day < 1 || $day > 31)
				{
					$dateFlag = 0;
				}
				break;
					
			case 4:
				if($day < 1 || $day > 30)
				{
					$dateFlag = 0;
				}
				break;	
			case 5:
				if($day < 1 || $day > 31)
				{
					$dateFlag = 0;
				}
				break;
			case 6:
				if($day < 1 || $day > 30)
				{
					$dateFlag = 0;
				}
				break;
			case 7:
				if($day < 1 || $day > 31)
				{
					$dateFlag = 0;
				}
				break;
			case 8:
				if($day < 1 || $day > 31)
				{
					$dateFlag = 0;
				}
				break;
			case 9:
				if($day < 1 || $day > 30)
				{
					$dateFlag = 0;
				}
				break;
			case 10:
				if($day < 1 || $day > 31)
				{
					$dateFlag = 0;
				}
				break;
			case 11:
				if($day < 1 || $day > 30)
				{
					$dateFlag = 0;
				}
				break;
			case 12:
				if($day < 1 || $day > 31)
				{
					$dateFlag = 0;
				}
				break;
		}
		
		//echo $dateFlag . "\n";
		$peselCandidate = (string)$peselCandidate;
		$checkFlag = 1;
		$suma = 0;
		$suma = $peselCandidate[0] + 3*$peselCandidate[1] + 7*$peselCandidate[2] + 9*$peselCandidate[3] +
				$peselCandidate[4] + 3*$peselCandidate[5] + 7*$peselCandidate[6] + 9*$peselCandidate[7] +
				$peselCandidate[8] + 3*$peselCandidate[9];
		$suma = 10 - ($suma%10);
		if($suma != $peselCandidate[10])
		{
			$checkFlag = 0;
		}
		
		
		
		
		if($dateFlag == 1 && $checkFlag == 1)
		{
			if($peselCandidate[9] %2 == 0)
			{
				echo "Ten pesel jest poprawny, je¿eli nale¿y do kobiety\n";
			}
			else
			{
				echo "Ten pesel jest poprawny, je¿eli nale¿y do mê¿czyzny\n";
			}
			return 1;
		}
		else
		{
			return 0;
		}
		
	}
	else
	{
		return 0;
	}
	
}