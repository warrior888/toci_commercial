<?php

$slowo = 'nie umiem';
$tablica = array();
$tablica = str_split($slowo);
$dlugosc = sizeof($tablica);
$noweSlowo = "";
for($i=$dlugosc;$i>=0;$i--)
{
	$noweSlowo = $noweSlowo . $tablica[$i];
}

echo $noweSlowo;
