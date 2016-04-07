<?php

	require_once 'pd_substr.php';
	require_once 'pd_strlen.php';

	function pd_strpos($haystack, $needle)
	{
		$position = null;
		$lengthNeedle = pd_strlen($needle);
		
		for($i = 0;$i < pd_strlen($haystack);$i++)
		{
			if($needle == pd_substr($haystack, $i, $lengthNeedle))
			{	
				return $position = $i;
			}
		}
		
		return $position;
	}
	
	
	$haystack = "beata";
	$needle = "at";
	
	echo "\n";
	echo "Moje: ". pd_strpos($haystack, $needle);
	echo "\n";
	echo "System: ". strpos($haystack, $needle);
	echo "\n";
	