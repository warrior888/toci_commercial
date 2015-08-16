<?php

	$test = 'Igor lamal rogI';
	
	
	// radar teeet teset kajak   asdf
     // -------> <----------
	// 0  1   2    3   4
	// r  a   d  a  r
	
	$dlugosc = strlen($test); // ostatni index tab + 1 , ind 0
	
	$i = 0;
	$j = $dlugosc - 1;
	
	echo 'D³ugosc: ' . $dlugosc . "\n";
	
	for (; $i < $j; $i++, $j--)
	{
		echo 'I wynosi: ' . $i . ', a j wynosi: ' . $j ."\n";
		
		if ($test[$j] != $test[$i])
		{
			echo 'To nie jest palindrom'."\n";
			break; // continue;
		}
	}
	
	// strrev
	
	function NaszaDlugoscTextu($text)
	{
		for ($i = 0; isset($text[$i]); $i++)
		{
		}
		
		return $i + 1;
	}
	
	$zm = NaszaDlugoscTextu('hcfsifqaufhadughdasughdsufghwdufgsid');
	echo "\n\n\n";
	echo NaszaDlugoscTextu('hcsifqaufhadufghdasughdsufghwdufgsid');
	echo "\n\n\n";
	echo $zm;
	                        // <----------------
	$text = 'szybkosc dzialania skryptu';
	echo "\nSystemowy strrev: \n";
	echo strrev($text);
	echo "\nStrrev kolegi \n";
	for ($i = strlen($text) - 1; $i >= 0; $i--)
	{
		echo $text[$i];
		//echo "\n";
			
	}
	// zad 1
	function CzyRowne($text1, $text2)
	{
		
	}
	
	function CzyToJestPalindrom($kandydat)
	{
		// liczby: int, float, double
		// text string
		// bool true false   ->>>   ==  === != < > >= <= || &&
		//      radar          radar
		return $kandydat == strrev($kandydat); // true false
	}
	
	
	echo "\n\n\n |||||| ";
	
	
	$czyRadarPlai = CzyToJestPalindrom("radar"); // bool int
	
	echo "\n\n\n |||||| ";
	
	if (CzyToJestPalindrom("dsufadghufgafgdyfid") == true) // true
	{
		echo 'Palindrom !!!!!!!';
	}
	else
	{
		echo 'Nie Palindrom!!!!';
	}
	
	if (CzyToJestPalindrom($test)) // true
	{
		echo '!!!!! PALI !!!!!!!';
	}
	else
	{
		echo 'Nie Palindrom!!!!';
	}
	// false caly blok ifa pominidzty 
	
	