<?php
	
	// -------------------------------------------------------------------------------------
	// Programming Course: PHP Basics (bees), by Bartłomiej Zapart (TOCI), September 2016.
	// Homework after Training 3 session, dated 2016.09.25. Part 3a of 3.
	// Author:	MichalMtr (mtr180deg)
	// -------------------------------------------------------------------------------------

	// -------------------------------------------------------------------------------------
	// Generates gameboard (table) with randomly placed bombs. For bombs-neigbouring fields 
	// indicates the number of neighbouring bombs. Prints the gameboard. 
	// 2 - dimensional array version.
	// -------------------------------------------------------------------------------------
                                                                      		
		
	$columns = 5;
	$rows = 5;
	$bombs = 7;
	
	GenerateMinesweeperTable($columns, $rows, $bombs);
	
	
	// Main function.----------------------------------------------------------------------- 
	function GenerateMinesweeperTable($dimX, $dimY, $bombsNumber)
	{	
		if (is_numeric($dimX) && is_numeric($dimY) && 
			is_numeric($bombsNumber) && $bombsNumber <= $dimX * $dimY)  // Input check.
		{
			$table = ZeroTable($dimX, $dimY);  // Call the table with only zeros.
			$i = 0; 
					
			while($i < $bombsNumber)
			{														  
				$x = rand(0, $dimX - 1);
				$y = rand(0, $dimY - 1);
				
				if($table[$y][$x] !== 'B')
				{
					$table = CalculateNeighbour($x, $y, $table);  // Indicate number of neighbouring bombs.  
					$table[$y][$x] = 'B';  // Plant the bomb.
					$i++;
				}
			}	
		}
		else
		{
			$table = array(array("\nInvalid input data."));
		}
		
		return Show($table);
	} // end GenerateMinesweeperTable();
	
	
	// Generate table of only zeros.--------------------------------------------------------
	function ZeroTable($dimX, $dimY)
	{
		for ($y = 0; $y < $dimY; $y++)
		{
			for($x = 0; $x < $dimX; $x++)
			{
				$table[$y][$x] = 0;
			}
		}
		
		return $table; 
	} // end ZeroTable(); 
	
	
	// Calculate the noumber of neighbouring bombs for cells next to bombs.-----------------
	function CalculateNeighbour($bombX, $bombY, $table)
	{
		for ($j = -1; $j <= 1; $j++)
		{
			for ($i = -1; $i <= 1; $i++)
			{
				if (isset($table[$bombY + $j][$bombX + $i]) &&      // Only within the array.
						  $table[$bombY + $j][$bombX + $i] !== 'B')
				{
					{
						$table[$bombY + $j][$bombX + $i] += 1;		// Count occurencies.
					}
				}	
			}
		}	  
		return $table;
	} // end CalculateNeighbour();
	
	
	// Print out the gameboard.-------------------------------------------------------------
	function Show($table) 
	{
		foreach($table as $y => $xGroup)
		{
			foreach ($xGroup as $x => $v)
			{
				echo $table[$y][$x];
			}
			
			echo "\n";
		}
	} // end Show(); 