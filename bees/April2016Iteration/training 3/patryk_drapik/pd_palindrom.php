<?php
	
	require_once 'pd_strlen.php';
	require_once 'pd_str_replace.php';
	require_once 'pd_strrev.php';
	
	function pd_palindrom($string)
	{
		$string = pd_str_replace(" ", "", $string);
		$string = strtolower($string);
		$pali = pd_strrev($string);
		
		return ($string == $pali) ? "Tak" : "Nie";
	}
	
	//echo pd_palindrom("    kule ma Mameluk     ");
	