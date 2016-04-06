<?php 

	$liczba = '8a7b';
	
	
	function WyciaganieLiczby($par)
	{
		for ($i = 0; $i < strlen($liczba); $i++)
		{
			if(gettype($liczba[$i]) == 'string')
			{
				echo $liczba[$i];
			}
		}
	}
	
	WyciaganieLiczby($par);