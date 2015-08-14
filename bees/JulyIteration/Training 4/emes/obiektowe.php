<?php

class Zamien 
{
	function Zamiana ($numerKonta)
	{	$wynik = '';
	for ($i = 0; $i <= strlen($numerKonta); $i+=2)
	{
		$wynik .= $numerKonta[$i + 1] . $numerKonta[$i];
	}
	return $wynik;
	}
}

class Spacja extends Zamien
{
	function Spacja ($numerKonta)
	{	$wynik = '';
	for ($i = 0; $i < strlen($numerKonta); $i+=4)
	{
		$wycinek = substr($numerKonta, $i,4);
		$wynik .= $wycinek . ' ';
	}
	return $wynik;
	}
}

class SpacjaiZamien extends Spacja
{
	function SpacjaiZamien ($numerKonta)
	{
		return Zamien(Spacja);
	}
}
























zamien, dziedzicz spacje