<?php

$pal = array ("ALA", "KON", "KAJAK", "Cos", "kremerk", "Bob", "Sosza");

$dlu = count($pal) ;

for ($i=0; $i < $dlu ; $i++)
	if ($pal[$i] == strrev($pal[$i]))
	{
		echo "slowo " . "$pal[$i]" . " jest Palindromem" . "\n";
	}
	else 
	{
		echo "slowo " . "$pal[$i]" . " nie jest Palindromem" . "\n";
	}


?>