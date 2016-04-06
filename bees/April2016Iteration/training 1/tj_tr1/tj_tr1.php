<?php

	$trescTextowa = 'cokolwiek';
	echo "\n";
	
	echo $trescTextowa[1] . $trescTextowa[7];
	echo "\n";
	echo "Dlugosc textu: " . strlen($trescTextowa);
	
	echo tj_strlen($trescTextowa);
	
	echo "\n";
	
	function tj_strlen($text)
	{
		echo "\n";
		echo 'nic nie robie';
		var_dump(isset($text[9]));
		
		for ($i = 0; isset($text[$i]); $i++)
		{
			
		}
		
		echo "\n";
		
		return $i;
	}
	