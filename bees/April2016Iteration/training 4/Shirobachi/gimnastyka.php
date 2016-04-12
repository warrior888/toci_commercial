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
	
	
	for($i=0; $i < $wartosc; $i++)
	{
		if($i == 1)
		{
			echo 'jeden ';
		}
		else if($i == 2)
		{
			echo 'dwa ';
		}
		else if($i == 3)
		{
			echo 'trzy ';
		}
		else if($i == 4)
		{
			echo 'cztery ';
		}
		else if($i == 5)
		{
			echo 'piec ';
		}
		else if($i == 6)
		{
			echo 'szesc ';
		}
		else if($i == 7)
		{
			echo 'siedem ';
		}
		else if($i == 8)
		{
			echo 'osiem ';
		}
		else if($i == 9)
		{
			echo 'dziewiec ';
		}
		else if($i == 0)
		{
			echo 'zero ';
		}
	}