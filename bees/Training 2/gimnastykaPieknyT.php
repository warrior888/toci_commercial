<?php
$wartosc = 5;

if ($wartosc > 30 || $wartosc < 1)
	echo"wartosc jest zla";

else
{
	if($wartosc < 8)
		echo "pierwszy tydzien";
	else
	{
		if($wartosc < 15)
			echo "drugi tydzien";
		else
			if($wartosc < 22)
				echo "trzeci tydzien";
			else
				if($wartosc < 29)
					echo "czwatry tydzien";
				else
					echo"piaty tydzien";
	}
}