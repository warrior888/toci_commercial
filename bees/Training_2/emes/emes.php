<?php

	$wartosc = 22;
	
	if ($wartosc < 1 || $wartosc > 30)
	{
		echo "Wartosc jest zla";
	}
	
	if ($wartosc > 0 && $wartosc < 8 )
	{
		echo "Pierwszy tydzien";
	}
	
	if ($wartosc > 7 && $wartosc < 15 )
	{
		echo "Drugi tydzien";
	}
	
	if ($wartosc > 14 && $wartosc < 22 )
	{
		echo "Trzeci tydzien";
	}
	
	if ($wartosc > 21 && $wartosc < 29 )
	{
		echo "Czwarty tydzien";
	}
	
	