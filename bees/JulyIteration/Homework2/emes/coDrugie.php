<?php

$slowo = "sweet home alabama";
$dlugosc = strlen($slowo);

$coDrugie = "";

for ($i = 1; $i <= $dlugosc; $i += 2)
{
	$coDrugie .= $slowo[$i];
}

echo $coDrugie;