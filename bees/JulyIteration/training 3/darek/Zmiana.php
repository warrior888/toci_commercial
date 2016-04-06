<?php
/*
function zmiana ($liczba)
{
	for ($i=0;$i<strlen($liczba);$i++)	
	{
	$first = $liczba[$i];
	$secound = $liczba[$i+1];
	$liczba[$i] = $secound;
	$liczba[$i+1] = $first;
	
	}	
	return $liczba;
}

echo zmiana('123123123123');
*/



function Zamiana ($numerKonta)
{ 
	$wynik = '';
	
	for ($i = 0; $i < strlen($numerKonta); $i+=2)
	{
		if (isset($numerKonta[$i + 1]))
		{
			$wynik .= $numerKonta[$i + 1] . $numerKonta[$i];
		}
		else 
		{
			$wynik .= $numerKonta[$i];
		}
	}
	
	return $wynik;
}

//echo Zamiana('4782305728064732683476837667565785058');