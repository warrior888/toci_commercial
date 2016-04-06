<?php


$slowo= 'a c d b ';

$dlugosc = strlen($slowo);

echo "Dlugosc wynosi: ". $dlugosc. "\n";// liczy ilosc znaków

$OstatniElementTablicy = $dlugosc- 1;

echo "Ostatni Element Slowa to: ". $OstatniElementTablicy . "\n";


$coKtores="";

for ($i = 0; $i <= $OstatniElementTablicy; $i++,$OstatniElementTablicy--)

{
	if($slowo[$i] != $slowo[$OstatniElementTablicy])

	{
	$coKtores .= $slowo[$i] . $slowo[$OstatniElementTablicy];

	} 
	
}
echo $coKtores;



