<?php

		$wartosc = 0;
		
		if($wartosc<1 || $wartosc>30)
		{
			echo "Wartosc jest zla";
		}
		if($wartosc>=1 and $wartosc<=7)
		{
			echo "Pierwszy tydzien";
		}
		if($wartosc>=8 and $wartosc<=14)
		{
			echo "Drugi tydzien";
		}
		if($wartosc>=15 and $wartosc<=21)
		{
			echo "Trzeci tydzien";
		}
		if($wartosc>=22 and $wartosc<=28)
		{
			echo "Czwart tydzien";
		}
		if($wartosc>=29 and $wartosc<=30)
		{
			echo "Piaty tydzien";
		}
		
		
?>