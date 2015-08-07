<?php

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