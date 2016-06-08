<?php
	
	require_once 'pd_substr.php';
	require_once 'pd_strlen.php';
	
	function pd_str_replace($search, $replace, $subject)
	{
		$lengthSearch = pd_strlen($search);
		$newString = "";
		$cut = -1;
		
		for($i=0; $i < pd_strlen($subject); $i++)
		{
			if($cut < $i)
			{
				if($search == pd_substr($subject, $i, $lengthSearch))
				{
					$newString .= $replace;
					$cut = ($lengthSearch - 1)  + $i;
				}
				else 
				{
					$newString .= $subject[$i]; 
				}
			}
		}
		
		return $newString;
	}
	
	/*
	$search = "maly";
	$replace = "nie ma";
	$subject = "kobyla ma maly bok";

	$moje = pd_str_replace($search, $replace, $subject);
	$system = str_replace($search, $replace, $subject);
	
	if($moje == $system)
	{
		echo "tak";
	}
	else 
	{
		echo "nie";
	}
	*/