<?php
echo "\n";
echo 'To dziala';
echo "\n";

//zmienne
$nazwa = 'tresc';
$wiek = 12;
$limitWiekuDoroslosci = 18;

if($wiek >= $limitWiekuDoroslosci){
	echo 'Osoba jest dorosla';
}
else {
	echo 'Mamy tu dziecko';
}

echo "\n";

if($wiek > 6 && $wiek <12){
	echo 'podstawowka';
}

if($wiek >= 12 && $wiek <16){
	echo 'gimbaza';
}

if($wiek >= 16 && $wiek <19){
	echo 'liceum';
}

if($wiek >= 19 && $wiek <26){
	echo 'szkola srednia';
}

if($wiek >= 26){
	echo 'praca zawodowa';
}

echo "\n";
?>
