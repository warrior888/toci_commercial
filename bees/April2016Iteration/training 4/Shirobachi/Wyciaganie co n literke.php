<?php

$text = "cokolwiek lub cokolwiek innego!";
$wynik = '';
$n=3; //to jest nasze n!

for($i=0; $i<strlen($text); $i++)
{
	if($i%$n==0)$wynik .= $text[$i];
}

echo $wynik;