<?php

		$wartosc = 0;
		
		if($wartosc<1 || $wartosc>30)
		{
			echo "Wartosc jest zla";
		}
		if($wartosc>=1 && $wartosc<=7)
		{
			echo "Pierwszy tydzien";
		}
		if($wartosc>=8 && $wartosc<=14)
		{
			echo "Drugi tydzien";
		}
		if($wartosc>=15 && $wartosc<=21)
		{
			echo "Trzeci tydzien";
		}
		if($wartosc>=22 && $wartosc<=28)
		{
			echo "Czwart tydzien";
		}
		if($wartosc>=29 && $wartosc<=30)
		{
			echo "Piaty tydzien";
		}
		
		
?>