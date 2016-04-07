<?php
	
	function pd_substr($string,  $start, $length)
	{
		$newString = "";
		$length =  $start + $length;
		
		for($i= $start; $i < $length && isset($string[$i]); $i++)
		{
			$newString .= $string[$i];
		}
		
		return $newString;
	}
	
	/*
	$string = "wyraz";
	$start = 1;
	$length = 2;
	
	$moje=pd_substr($string, $start, $length);
	$system=substr($string, $start, $length);
	
	
	if($moje == $system)
	{
		echo "Tak";
	}
	else 
	{
		echo "Nie";
	}
	*/