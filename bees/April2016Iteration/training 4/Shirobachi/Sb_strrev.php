<?php

//kod "na pale"

$slowo = "ala ma kota, kod ma aids";

$dlugosc = strlen($slowo);
$wynik='';

	for($i=$dlugosc-1; $i>=0; $i--)
	{
		$wynik .= $slowo[$i];
	}

	echo $wynik;