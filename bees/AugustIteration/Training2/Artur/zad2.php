<?php

	function Palindromy($text)
	{
		$slownik = array ('zaraz', 'kajak', 'anna', 'sedes', 'mam', 'ala', 'radar',
						  'sus', 'zakaz', 'sos', 'pop', 'aga', 'oko', 'kok', 'abba', 
						  'inni', 'oto', 'aha', 'olo', 'ono');
		
		$dl = count ($slownik);

		for ($i = 0; $text < $dl; $i++)
		{
			if ($text === $slownik[$i])
			{
				echo "\n".'prawda';
				break;
			}
			else
			{
				echo "\n".'klamstwo';
			}
		}
	}
	
	echo Palindromy('ono');
	// jak wywaliæ tylko pasuj¹cy element z tablicy?