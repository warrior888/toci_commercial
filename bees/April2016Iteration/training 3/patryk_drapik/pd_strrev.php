<?php
	
	require_once 'pd_strlen.php';

	function pd_strrev($string)
	{
		$newString = "";
		
		for($i = pd_strlen($string) - 1; $i >= 0; $i--)
		{
			$newString .= $string[$i];
		}
		
		return $newString;
	}
	
	/*
	$string = "wyraz";
	
	$moje = pd_strrev($string);
	$system = strrev($string);
	
	if($moje == $system)
	{
		echo "Tak";
	}
	else 
	{
		echo "Nie";
	}
	*/
	
