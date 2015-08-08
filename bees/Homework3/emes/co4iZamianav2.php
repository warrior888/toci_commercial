<?php

function ZamianaIspacja ($numerKonta)
{
	$wynik = '';
	$nowa = '';
	for ($i = 0; $i < strlen($numerKonta); $i+=2)
	{
		
		$wynik .= $numerKonta[$i + 1] . $numerKonta[$i];
		if (($i+1) % 4 == 0)
		{
			$nowa .= ' ';
		}
	}
	return $wynik;
	return $nowa;
}

echo ZamianaIspacja('478230572806473268347683766756578505');