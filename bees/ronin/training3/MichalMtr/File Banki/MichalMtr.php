<?php

// -----------------------------------------------------------------------------------
// Programming Course: PHP Basics (bees), by Bartłomiej Zapart (TOCI), September 2016.
// Homework after Training 3 session, dated 2016.09.25. Part 1 of 3.
// Author:	MichalMtr (mtr180deg)
// -----------------------------------------------------------------------------------

// -----------------------------------------------------------------------------------
// Parse file, explode and merge with additional symbols. 
// Write changed string into the same file, at the end.
// -----------------------------------------------------------------------------------
	function GetCode()  // Ver. 1
	{
		$handle = fopen('banki.txt', 'a+');
		$result = '';
		
		while($line = fgets($handle))
		{
			$codeAndBank = explode(" \t", $line);
			$result .= '\''.$codeAndBank[0].'\' => \''.trim($codeAndBank[1]).'\', ';
		}
		
		fwrite($handle, $result); 
	}

	GetCode();

// -----------------------------------------------------------------------------------
// Parse file, explode and merge with additional symbols. 
// Write changed string into another file.
// -----------------------------------------------------------------------------------

	function GetCodeOther()
	{
		$handle = fopen('banki_other.txt', 'r');
		$result = '';
		
		while($line = fgets($handle))
		{
			$codeAndBank = explode(" \t", $line);
			$result .= '\''.$codeAndBank[0].'\' => \''.trim($codeAndBank[1]).'\', ';
		}
		
		return $result;
	}
		
		$res = GetCodeOther();
		fwrite(fopen('banki_out_case1.txt', 'w'), $res); // one method
		file_put_contents('banki_out_case2.txt', $res);  // another method

// -----------------------------------------------------------------------------------s	
