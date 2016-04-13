<?php

$string = "1322321132";
$tab = array(1 => "jeden", 2 => "dwa", 3 => "trzy");

function numberToText($tab, $key) 
{
	return $tab[$key];
}

for ($i=0; $i<strlen($string); $i++) 
{
	echo numberToText($tab, $string[$i])."\n";
}