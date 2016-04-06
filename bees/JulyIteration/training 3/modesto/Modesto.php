``<?php

$tresc = 'asdfasdfgdksjhkbzcvou';
$skok = 3;

function WyciagajLitere($tresc, $skok)
{
	for ($i = 0; $i < strlen($tresc); $i+=$skok)
	{
		echo $tresc[$i];
	}
}

WyciagajLitere($tresc, $skok);