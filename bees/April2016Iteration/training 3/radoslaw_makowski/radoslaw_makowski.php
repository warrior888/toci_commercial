<?php
	/*===================================== Szkolenie 3 =====================================*/
	$trescTextowa = 'cokolwiek';
	echo "\n" . $trescTextowa[1] . $trescTextowa[7];
	echo "\n";
	echo 'Dlugosc tekstu: ' . strlen($trescTextowa) . "\n";
	echo "Moja dlugosc tekstu: " . rm_strlen($trescTextowa);
	echo "\n";
	echo rm_strrev($trescTextowa) . "\n";
	function rm_strlen($text)
	{
		for ($i = 0; isset($text[$i]); $i++)
		{
		}
		return $i;
	}
	function rm_strrev($text)
	{
		$dlugosc = rm_strlen($text);
		$newtxt = '';
		for ($i = $dlugosc-1; $i >= 0; $i--)
		{
			$newtxt .= $text[$i];
			return $newtxt;
		}
	}
	
	//w domu funkcje do napisania:
	//strpos
	//strrev
	//substr
	//palindrom *
	//strtr *
	//str_replace