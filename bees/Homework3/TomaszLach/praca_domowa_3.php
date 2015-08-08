<?php

//zad1
function insertSpace($accNumber, $place=4)
{
	$index = 0;
	$output = "";
	for($i=0; $i<strlen($accNumber); $i++)
	{
		$output .=$accNumber[$i];
		if ($i % $place == ($place-1))
		{
			$output .=" ";
		}
	}


	return $output."\n";
}

echo insertSpace("012345678901234567890123");
echo insertSpace("012345678901234567890123", 6);
echo insertSpace("012345678901234567890123", 5);