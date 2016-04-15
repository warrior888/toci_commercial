<?php

$text = "cokolwiek lub cokolwiek innego!";
$wynik = '';

for($i=0; $i<strlen($text); $i++)
{
	if($i%2==0)$wynik .= $text[$i];
}

echo $wynik;