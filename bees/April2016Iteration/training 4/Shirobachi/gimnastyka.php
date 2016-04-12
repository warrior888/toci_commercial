<?php

	$wartosc = 5;
	
	if ($wartosc > 30 || $wartosc < 1)
	{
		echo"wartosc jest zla";	
	}
	else if($wartosc < 8)
	{
		echo 'Pierwszy tydzien';
	}
	else if ($wartosc < 15)
	{
		echo 'Drugi tydzien';
	}
	else if($wartosc < 22)
	{
		echo 'Trzeci tydzien';
	}
	else if($wartosc < 29)
	{
		echo 'Czwarty tydzien';
	}
	else
	{
		echo 'Piaty tydzien';
	}