<?php
/*
$slowo ='2323123123123';

/*for ($i=0; $i<strlen ($slowo); $i++)*/
/*
for ($i = strlen($slowo);$i>0; $i--)
{
echo $slowo[$i]."\n";
}
*/

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
	
	
//echo spacja ('2312312312312312312'); 
