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
{ $wynik = '';
for ($i = 0; $i <= strlen($numerKonta); $i+=2)
{
$wynik .= $numerKonta[$i + 1] . $numerKonta[$i];
}
return $wynik;
}

echo Zamiana('478230572806473268347683766756578505');