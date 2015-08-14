<?php

function JakiBank($numerKonta)
{
	$banki = [
				
			"1010" => " Narodowy Bank Polski",
			"1020" => " PKO BP",
			"1030" => " Citybank Handlowy",
			"1050" => " ING",
			"1060" => " BPH",
			"1090" => " BZ WBK",
			"1130" => " BGK",
			"1140" => " mBank",
			"1160" => "	Bank Millennium",
			"1240" => "	Pekao",
			"1280" => "	HSBC",
			"1300" => "	Meritum Bank",
			"1320" => "	Bank Pocztowy",
			"1440" => "	Nordea Bank",
			"1470" => "	Euro Bank",
			"1540" => "	BOS",
			"1580" => "	Mercedes-Benz Bank Polska",
			"1600" => "	BNP Paribas Fortis",
			"1610" => "	SGB - Bank",
			"1670" => "	RBS Bank (Polska)",
			"1680" => "	Plus Bank",
			"1750" => "	Raiffeisen Bank",
			"1840" => "	Societe Generale",
			"1870" => "	FM Bank PBP",
			"1910" => "	Deutsche Bank Polska",
			"1930" => "	Bank Polskiej Spoldzielczosci",
			"1940" => "	Credit Agricole Bank Polska",
			"1950" => "	Idea Bank",
			"2000" => "	Rabobank Polska",
			"2030" => "	BGZ",
			"2070" => "	FCE Bank Polska",
			"2120" => "	Santander Consumer Bank",
			"2130" => "	Volkswagen Bank",
			"2140" => "	Fiat Bank Polska",
			"2160" => "	Toyota Bank",
			"2190" => "	DnB Nord",
			"2480" => "	Getin Noble Bank",
			"2490" => "	Alior Bank ",
	];

	$cyfryWskazujace = substr($numerKonta, 2,4);

	foreach ($banki as $klucz => $element) {

		if ($klucz == $cyfryWskazujace) {
				
			echo "Konto o numerze  $numerKonta znajduje sie w $element ";
			return ;
		}
	}

	if ($klucz != $cyfryWskazujace)

		echo "Nie ma takiego Banku w Polsce.";
	return;
}

JakiBank('12203090102011111000000045635356465');



//******************************************************************************

function CzyPalindrom($slowo)
{
	$dlugoscSlowa = (int)  strlen($slowo);

	for ($i=0; $i < $dlugoscSlowa/2;  ){

		if ($slowo[$i] == $slowo[$dlugoscSlowa-(1+$i)]){
			$i++;
			if($i >= $dlugoscSlowa/2){
				//echo "palindrom <br>";
				return true;
			}
		}
			
		else {
			//echo "nie palindrom";
			return false;
		}
	}
		

}
 
$result = CzyPalindrom('majok999kojam');
var_dump($result);


//******************************************************************************


function CzyAnagram($slowo1, $slowo2){

	$dlugoscSlowa1 = (int)  strlen($slowo1);
	$dlugoscSlowa2 = (int)  strlen($slowo2);
	$sumaWartosciZnakow1 = 0;
	$sumaWartosciZnakow2 = 0;

	for ($i=0; $i < $dlugoscSlowa1;  ){

		$sumaWartosciZnakow1 += ord($slowo1[$i]);
		$i++;
	}
	//echo $sumaWartosciZnakow1;

	for ($i=0; $i < $dlugoscSlowa2;  ){
		$sumaWartosciZnakow2 += ord($slowo2[$i]);
		$i++;
	}
	//echo $sumaWartosciZnakow2;
	 

	if ($sumaWartosciZnakow1 == $sumaWartosciZnakow2){
		//echo ('tak to anagramy');
		return true;
	}
	else {
		//echo ('to nie anagramy');
		return false;
	}
}

$result = CzyAnagram('majka','kajam');
var_dump($result);

/*wiem ze program na dziury,  ale mysle ze na tyle trudno je trafic
 zak³adj¹c ze podany:
 1. uzytkowanik wprowadza wyraz( nie zdania) o rownej liczbie znakow, tylko ma³ymi literami,
 2. wyrazy maja sens i cos oznaczaj¹, patrz¹c na rozlozenie samoglosek w alfabecie
 ¿e sie sprawdzi */


?>