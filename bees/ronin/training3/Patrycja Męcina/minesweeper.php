<?php

GenerateMinesweeperTable(10,10,25);
	

function GenerateMinesweeperTable($dimx, $dimy, $bombsnumber)
{
	$tablica = array();
	
	for($i=0; $i<$dimx; $i++)
	{
		for($j=0; $j<$dimy; $j++)
		{
			$tablica[$i][$j] = 0;
			//echo $tablica[$i][$j] . " ";
		}
		//echo "\n";
	}
	$tablica = Mines($bombsnumber, $tablica, $dimx, $dimy);
	for($i=0; $i<$dimx; $i++)
	{
		for($j=0; $j<$dimy; $j++)
		{
			if( $tablica[$i][$j] >= 0)
			{
				echo " ";
			}
			echo $tablica[$i][$j] . " ";
			
		}
		echo "\n";
	}
}

function Mines($bombsnumber, $tablica, $dimx, $dimy)
{
	for($i=0; $i<$bombsnumber; $i++)
	{
		$x = rand(0, $dimx-1);
		$y = rand(0, $dimy-1);
		if($tablica[$x][$y] != -1)
		{
			$tablica[$x][$y] = -1;
		}
		else 
		{
			while($tablica[$x][$y] == -1)
			{
				$x = rand(0, $dimx-1);
				$y = rand(0, $dimy-1);
			}
			
			$tablica[$x][$y] = -1;
		}
		for($k = -1 ; $k <= 1; $k++)
		{
			for($l = -1 ; $l <= 1 ; $l++)
			{
				if( isset($tablica[$x + $k][$y + $l]) && $tablica[$x + $k][$y + $l] != -1)
				{
					$tablica[$x + $k][$y + $l]++;
				}
			}
		}
		
	}
	return $tablica;
}

function Wartosci($x,$y,$tablica)
{
	if($tablica[$x][$y] == -1)
	{
		$tablica[$x-1][$y]+=1; 
	}
}