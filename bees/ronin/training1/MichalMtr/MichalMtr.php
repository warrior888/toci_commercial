<?php

	// ----------------------------------------------------------------------------------------------------
	// Programming Course: PHP Basics (bees), by Bartłomiej Zapart (TOCI), September 2016.
	// Homework after join.me session, dated 2016.09.04.

	// Author: MichalMtr (mtr180deg)
	// Level: Spaghetti :-)
	// Status: TBD
	// Revised: 2016-09-09 00:15
	// ----------------------------------------------------------------------------------------------------

	
	// ----------------------------------------------------------------------------------------------------
	// Search for '$element' of given position (not key) in '$table.
	// Example: 'a' => 'wartosc', 'b' => 'wartosc', 'c' => 'wartosc dla c', 3 wynikiem wartosc dla c
	// ----------------------------------------------------------------------------------------------------
	$myElement = 3; 
	$myTable = array(
			'a' => 'Value for a',
			'b' => 'Value for b',
			'c' => 'Value for c'
	);
	
	echo "\n\nKey of position " . $myElement . " has value equal: " . 
		michalmtrFindElementInTable($myTable, $myElement) . "\n\n"; 
	
	function michalmtrFindElementInTable($table, $element)
	{
		$i = 1;
		foreach ($table as $value)
		{
			if ($i == $element)
			{
				$result = $value; // Check subsequent positions. Success when ($i) mached with the searched one.
			}
		
			$i++;
		}
		
		return $result;
	}

	// ----------------------------------------------------------------------------------------------------
	// Search for substring in string from '$start' position and of specified '$length'. 
	// Example: text, 1, 2 => ex; beatka , 2 , 2 => at
	// ----------------------------------------------------------------------------------------------------
	$myText = 'beatka';
	$myStart = 2;
	$myLength = 2;
	
	echo "\n\nSubstring starting with index " . $myStart . " and of " . $myLength .	" characters long equals: " . michalmtrOwnSubString($myText, $myStart, $myLength) . "\n\n";
	
	function michalmtrOwnSubString($text, $start, $length)
	{
		$resultSubstring = "";
		
		for ($i = $start; ($i < $start + $length) && ($i < strlen($text)) && ($start < strlen($text)) ; $i++) // 
		{
			$resultSubstring .= $text[$i];  // Every iteration concatenates the following char.
		}
		
		return $resultSubstring;
	}
	
	// ----------------------------------------------------------------------------------------------------
	// Find the index of first (only) occurrence of given '$letter' in '$text'.
	// Example: beatka, e => 1, beatka , a => 2
	// ----------------------------------------------------------------------------------------------------	
	$myWord = 'beatka';
	$myLetter = 'a';
	
	echo "\n\nLetter '" . $myLetter . "' occured first time at index: " . michalmtrLetterPosition($myWord, $myLetter) . "\n\n";
	
	function michalmtrLetterPosition($text, $letter)
	{
		$index = null; 
		$occurrence = null;
		
		for ($i = 0; $i < strlen($text); $i++)
		{
			if ($text[$i] == $letter && $occurrence == False) // Check if not occured before. If so, this is the first occurrence and index is the one. 
			{
				$index = $i;				
				$occurrence = True;
			}
		}
		
		return $index;
	}

	// ----------------------------------------------------------------------------------------------------
	// Count all occurrencies of every '$char' in '$string' and put the results into '$table' where key is '$char' and value is the number of occurrencies.	
	// Example: // beatka => array ('b' => 1, 'e' => 1, 'a' => 2, 't' => 1, 'k' => 1) ; text => array('t' => 2, ...)
	// ----------------------------------------------------------------------------------------------------
	$myWord = 'beatka';
	
	var_dump(michalmtrCountLetters($myWord));  //Question: is there a better way to present the structure of the table?
	
	function michalmtrCountLetters($string)
	{
		$table = array();
				
		for ($i = 0; $i < strlen($string); $i++)
		{	
			if (! isset($table[$string[$i]])) // Check if already not counted (not occured).
			{
				$table[$string[$i]] = 1;
			}
			else
			{
				$table[$string[$i]]++;
			}
		}
		
		return $table;
	}

	// ----------------------------------------------------------------------------------------------------
	// Check if pattern exitst in text and return index of pattern's beginning in the text. Otherwise return -1.
	// Example: beatka, tk => 3; beatka , fds, => -1
	// ----------------------------------------------------------------------------------------------------
	$myText = 'beatka';
	$myNeedle = 'tk';
	
	echo "\n\nFirst letter index of '" . $myNeedle . "' in '" . $myText . "' is equal: " . michalmtrStringPosition($myText, $myNeedle) . "\n\n";
	
	function michalmtrStringPosition($text, $needle)
	{
		$firstLetterIndex = michalmtrLetterPosition($text, $needle[0]);
				
		if (michalmtrOwnSubString($text, $firstLetterIndex, strlen($needle)) == $needle)
		{
			return $firstLetterIndex;
		}
		else
		{
			return -1;
		}
	} 

	// ----------------------------------------------------------------------------------------------------
	// Replace the occurence (only the first) of '$needle' substring in the $text.
	// Example: str_replace : beata, ta, tka => beatka
	// ----------------------------------------------------------------------------------------------------
	$myText = 'beata';
	$myNeedle = 'at';
	$myReplace = 'zpiek';
	
	echo "\n\nText after replacment is: " . michalmtrStringReplace($myText, $myNeedle, $myReplace) . "\n\n";
	
	function michalmtrStringReplace($text, $needle, $replace) // str_replace : beata, ta, tka => beatka
	{
		$start = michalmtrStringPosition($text, $needle); //2
		
		if ($start != -1)
		{
			$newText = "";
			 
			for ($i = 0; $i < $start; $i++)
			{
				$newText .= $text[$i];
			}
			for ($i = 0; $i < strlen($replace); $i++)
			{
				$newText .= $replace[$i];
			}
			for ($i = $start + strlen($needle); $i < strlen($text) ; $i++)
			{
				$newText .= $text[$i];
			}
			
			return $newText;	
		}
	}
?>