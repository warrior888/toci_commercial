<?php

function Zamiana ($numerKonta)
{	$wynik = '';
	for ($i = 0; $i <= strlen($numerKonta); $i+=2)
	{
		 $wynik .= $numerKonta[$i + 1] . $numerKonta[$i];
	}
	return $wynik;
}

echo Zamiana('478230572806473268347683766756578505');

