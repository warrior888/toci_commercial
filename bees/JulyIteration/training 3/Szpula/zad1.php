<?php
	
	$intLiczba = '8dsgv3sdrfv6dfb3svf45';
	
	function NumberExtractor($param)
	{
		$liczby = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9);
		$array = str_split($param);
		
		for($i = 0; $i <= count($array); $i++)
		{
			if(in_array($array[$i], $liczby))
			{
				echo $array[$i];
			}
		}
	}
	NumberExtractor($intLiczba);
	
?>