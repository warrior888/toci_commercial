<?php

$liczba = '12356';





function toWords($liczba_do_sparsowania)
{
	for ($i=0; $i<strlen($liczba_do_sparsowania); $i++ )
	{
		switch($liczba_do_sparsowania[$i])
		{
			case 0:
				echo "zero"."\n";
				break;
			case 1:
				echo "jeden"."\n";
				break;
			case 2:
				echo "dwa"."\n";
				break;
			case 3:
				echo "trzy"."\n";
				break;
			case 4:
				echo "cztery"."\n";
				break;
			case 5:
				echo "pięć"."\n";
				break;
			case 6:
				echo "sześć"."\n";
				break;
			case 7:
				echo "siedem"."\n";
				break;
			case 8:
				echo "osiem"."\n";
				break;
			case 9:
				echo "dziewięć"."\n";
				break;
			default:
				echo "to nie jest cyfra".."\n";
				break;
		}
	}
}
toWords($liczba);