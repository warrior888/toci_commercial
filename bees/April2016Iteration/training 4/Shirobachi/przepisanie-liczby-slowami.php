<?php
 
function wypiszcyfre($a)
{
	if($a == 1)
	{
		return 'jeden ';
	}
	else if($a == 2)
	{
		return 'dwa ';
	}
	else if($a == 3)
	{
		return 'trzy ';
	}
	else if($a == 4)
	{
		return 'cztery ';
	}
	else if($a == 5)
	{
		return 'piec ';
	}
	else if($a == 6)
	{
		return 'szesc ';
	}
	else if($a == 7)
	{
		return 'siedem ';
	}
	else if($a == 8)
	{
		return 'osiem ';
	}
	else if($a == 9)
	{
		return 'dziewiec ';
	}
	else if($a == 0)
	{
		return 'zero ';
	}
	else
	{
		return 'BLAD!!';
	}
}

function wypisz($a)
{
	$b = strlen($a);
	$wynik = '';
	
	for($i=0; $i < $b; $i++)
	{
		$wynik .= wypiszcyfre($a[$i]);
	}
	return $wynik;
}

echo 'slowami 999 to: ' . wypisz("999"). "\n\n";

echo 'slowami 121 to: ' . wypisz(121);//dlaczego ?


