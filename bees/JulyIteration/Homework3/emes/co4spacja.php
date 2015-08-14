<?php

function Spacja ($numerKonta)
{	$wynik = '';
	for ($i = 0; $i < strlen($numerKonta); $i+=4)
	{
		$wycinek = substr($numerKonta, $i,4);
		$wynik .= $wycinek . ' ';
	}
	return $wynik;
}

echo Spacja('478230572806473268347683766756578505');