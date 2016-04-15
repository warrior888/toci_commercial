<?php

$text = "abcdefghijklmnoprstuwxyzzyxwutsrponmlkjihgfedcba";
$p=0; $o=strlen($text)-1;
$wynik = '';
$warunek = round($o+1);

//echo "o=".$o;

for($i=0; $i<=$warunek-1; $i++)
{
	$wynik .= $text[$p];
	$wynik .= $text[$o];
	
	$p++; $o--;
	if($p==$o || $p>=$o)break;
	
}

ECHO $wynik;
//echo "\n\no=".$o."p=".$p;