<?php
	
	require_once 'strlen.php';
	require_once 'replace.php';
	
	function palindrom($string)
	{
		$string = replace($string);
		$pali = "";
		
		for($i = length($string) - 1; $i >= 0; $i--)
		{
			$pali .= $string[$i];
		}
		
		if($pali == $string)
		{
			return "tak";
		}
		else 
		{
			return "nie";
		}
	}
	
	echo palindrom("a tu jaka ta kajuta");
	