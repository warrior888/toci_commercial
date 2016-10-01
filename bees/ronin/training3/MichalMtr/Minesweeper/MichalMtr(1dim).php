<?php

	// -------------------------------------------------------------------------
	// Programming Course:
	// PHP Basics (bees), by Bartłomiej Zapart (TOCI), September 2016.
	// Homework after Training 3 session, dated 2016.09.25. Part 3b of 3.
	// Author:	MichalMtr (mtr180deg)
	// -------------------------------------------------------------------------

	// -------------------------------------------------------------------------
	// Generates gameboard (table) with randomly placed bombs. For bombs-
	// neigbouring fields indicates the number of neighbouring bombs. Prints
	// the gameboard. 
   // 1 - dimensional array version.
	// -------------------------------------------------------------------------



	$columns = 5;
	$rows = 5;                     
	$bombs = 4;

	GenerateMinesweeperTable($columns, $rows, $bombs);


	// Main function.-----------------------------------------------------------
	function GenerateMinesweeperTable($dimX, $dimY, $bombsNumber)
	{
      // Input check.
		if (is_int($dimX) && is_int($dimY) && is_int($bombsNumber) &&
			$bombsNumber <= $dimX*$dimY && $bombsNumber >= 0 && 
         $dimX > 0 && $dimY > 0)  
		{
			// Call the table with only zeros.
         $table = ZeroTable($dimX, $dimY);  
			$i = 0;

			while($i < $bombsNumber)
			{
				// Draws the bomb position. 
            $xy = rand(0, $dimX*$dimY - 1); 

				if ($table[$xy] !== 'B')
				{
               //Indicate number of neighbouring bombs.
					$table = CalculateNeighbour($xy, $dimX, $table); 
					// Plant the bomb.
               $table[$xy] = 'B';  
					$i++;
				}
			}
		}
		else
		{
			$table = array("Invalid input data.\n");
		}

		return Show($dimX, $table);
	} // end GenerateMinesweeperTable();


	//Generate table of only zeros.---------------------------------------------
	function ZeroTable($dimX, $dimY)
	{
		for ($k = 0; $k < $dimY * $dimX; $k++)
		{
			$table[$k] = 0;
		}

		return $table;
	} // end ZeroTable();


	// Calculate the number of neighbouring bombs for cells next to bombs.------
	function CalculateNeighbour($bombXY, $dimX, $table)
	{
		for ($i=-1; $i<=1; $i++)
		{
			// First column
         if ($bombXY%$dimX==0) 						
			{
				for ($j=0; $j<=1; $j++)
				{
               // Only within the array and if no B (all cases)s.
					if (isset($table[$bombXY + $i*$dimX + $j]) && 
                         $table[$bombXY + $i*$dimX + $j] !== 'B')
					{
						$table[$bombXY + $i*$dimX + $j] += 1;
					}
				}
			}
         // Last column
			elseif ($bombXY%$dimX==$dimX-1) 			
			{
				for ($j=-1; $j<=0; $j++)
				{
					if (isset($table[$bombXY + $i*$dimX + $j]) && 
                         $table[$bombXY + $i*$dimX + $j] !== 'B')
					{
						$table[$bombXY + $i*$dimX + $j] += 1;
					}
				}
			}
         // Middle columns
			else 										
			{
				for ($j=-1; $j<=1; $j++)
				{
					if (isset($table[$bombXY + $i*$dimX + $j]) && 
                         $table[$bombXY + $i*$dimX + $j] !== 'B') //
					{
						$table[$bombXY + $i*$dimX + $j] += 1;
					}
				}
			}
		}

		return $table;
	} // end CalculateNeighbour();


	// Print out the gameboard.-------------------------------------------------
	function Show($dimX, $table)
	{
		foreach($table as $k => $v)
		{
			if ($k % $dimX == 0)
			{
				echo "\n";
			}

			echo $table[$k];
		}
	} // end Show();