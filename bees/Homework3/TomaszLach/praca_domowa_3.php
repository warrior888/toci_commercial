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

	return $output;
}

echo insertSpace("012345678901234567890123")."\n";
echo insertSpace("012345678901234567890123", 6)."\n";
echo insertSpace("012345678901234567890123", 5)."\n";

//zad2
//$jump - zmienna określająca który element będzie zamieniony z zerowym
function swapPlace($accNumber, $jump = 2)
{
	$output = $accNumber;
	$temp = "";
	for($i=0; $i<strlen($output);$i++)
	{
		if($i % $jump == 0)
		{
			$temp = $output[$i];
			$output[$i] = $output[$i+($jump-1)];
			$output[$i+($jump-1)] = $temp;
		}
	}
	return $output;
}

echo swapPlace("012345678901234567890123")."\n";

//zad2a
function insertAndSwap($accNumber)
{
	return insertSpace(swapPlace($accNumber));
}

echo insertAndSwap("abcdefghijklmnopqrstuvwxyz")."\n";

//zad 3
$pattern = array(3 => 1, 2=>5, 1=>6);
$accNumber = "abcdefghijklmnopqrstuvwxyz";
$accNumber_copy = $accNumber;

function swap( &$arr , $first, $second)
{
	$temp = $arr[$first];
	$arr[$first] = $arr[$second];
	$arr[$second] = $temp;

	return $arr;
}

function patternSwap(array $pattern, &$accNumber)
{
	foreach($pattern as $key => $value)
	{
		swap($accNumber, $value, $key);
	}
	return $accNumber;
}

//zad 4
function reversePatternSwap(array $originalPattern, &$secondaryAccNumber)
{
	$reversePattern = array_flip($originalPattern);
	$reversePattern = array_reverse($reversePattern, true);//parametr true jest mega ważny !!!!!!!!

	return patternSwap($reversePattern,$secondaryAccNumber);
}

echo $accNumber_copy." oryginał \n";
echo strcmp($accNumber_copy, patternSwap($pattern, $accNumber))."\n";
echo strcmp($accNumber_copy, reversePatternSwap($pattern,$accNumber))."\n";