<?php

$slowo = "1234123412341234";
$dlugosc = strlen($slowo);
$coIleMaWyswietlac = 2; // -> tutaj mozna zmienic co ile znakow ma sie wyswietlac
$coKtores = "";

if($coIleMaWyswietlac <1)
{
	echo "Nie da sie wyswietlac liczb co 0 miejsc a tym bardziej co -n (gdzie n >=1) miejsc !!! Uzytkowniku, nie badz yeti !!!";
	return false;
}

for ($i = ($coIleMaWyswietlac -1); $i <= $dlugosc; $i += $coIleMaWyswietlac)
{
	$coKtores .= $slowo[$i];
}

echo $coKtores;