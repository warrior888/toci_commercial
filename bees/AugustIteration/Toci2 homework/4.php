<?php

$tablica = array ('kajak', 'tola', 'koka', 'waaaaz', 'zoza', 'zola', 'zuo');


for ($i=0; $i < count($tablica); $i++)

	{
	echo $tablica [$i];
	}

if ($tablica[$i] == strrev ($tablica[$i]))
	
	{
	echo 'To jest Palindrom';
	}
else
	{
	echo 'To nie jest Palindrom';
	}