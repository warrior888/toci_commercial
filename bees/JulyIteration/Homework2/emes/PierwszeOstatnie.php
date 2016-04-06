<?php

$slowo = 'acegihfdb';
$dlugosc = strlen($slowo);
echo "Dlugosc wynosi : " . $dlugosc . "\n";
$OstatniElementTablicy = $dlugosc - 1;
echo "OstatniElementTablicy wynosi: " . $OstatniElementTablicy . "\n";
$coKtores = "";


for ($i = 0; $i <= $OstatniElementTablicy; $i++,$OstatniElementTablicy--)
{		
	if($slowo[$i] != $slowo[$OstatniElementTablicy])
	{
		$coKtores .= $slowo[$i] . $slowo[$OstatniElementTablicy];
	} else {
		$coKtores .= $slowo[$i];
	}
	
}

echo $coKtores;