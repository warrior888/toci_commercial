<?php

class magia extends bazowa
{
	function spacja($liczba)
	{
	$wynik = '';
	for ($i=0;$i<strlen($liczba);$i++)
	{
		$wynik .= $liczba[$i];
		if (($i+1) % 4 ==0 )
		{
			$wynik .= ' ';
		}
	}

	return $wynik;
	}



	function strzal($numerKonta) 
	{
	$this -> return	spacja(Zamiana($numerKonta));
	}

	strzal ('123456789');
}


class bazowa 
{
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
}

