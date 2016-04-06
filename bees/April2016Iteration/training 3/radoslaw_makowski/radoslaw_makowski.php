<?php
	/*===================================== Szkolenie 3 =====================================*/
	$trescTextowa = 'cokolwiek';
	echo $trescTextowa[1] . $trescTextowa[7];
	echo "\n";
	echo 'Dlugosc tekstu: ' . strlen($trescTextowa) . "\n";
	echo "Moja dlugosc tekstu: " . rm_strlen($trescTextowa);
	echo "\n";
	function rm_strlen($text)
	{
		for ($i = 0; isset($text[$i]); $i++)
		{
		}
		return $i;
	}
	function in_strrev($text)
	{
		for ($i = 0; ;)
		{
			
		}
	}
?>