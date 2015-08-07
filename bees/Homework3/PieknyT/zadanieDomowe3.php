<?php

function wstawSpacje($numerKonta) 
//zad1 wstawia spacje po 4 cyfrach do konta
{
	$wynik ='';
	
	for ($i = 0; isset($numerKonta[$i]); $i++) 
	{
		if($i == 3 || $i == 7 || $i == 11 || $i == 15 || $i == 19 || $i == 23 ) // nie wiem jak to odspagecic???
		{
			$wynik.= $numerKonta[$i]."\n";
		}
		else 
		{
			$wynik.= $numerKonta[$i];
		}
	}
	return $wynik;
}

function zamienMiejscami($numerKonta) 
//zad2 zamienia miejscami s¹siaduj¹ce cyfry 1-2, 3-4, 5-6,
{
	$wynik ='';
	
	for ($i = 0; isset($numerKonta[$i]); )
	{
		$wynik.= $numerKonta[$i+1]; 
		$wynik.= $numerKonta[$i];
		$i+=2;
	}
return $wynik;
}

function szyfr2a($numerKonta) 
//zad2a zamienia miejscami sasiadujace cyfry , wstawia spacje co 4 cyfry
{
	return	wstawSpacje(zamienMiejscami($numerKonta));
}

function tablicaNaString($tablicaDoPrzepisania)
{
	$newString ='';

	for ($i=0; isset($tablicaDoPrzepisania[$i]); $i++)
	{
		$newString.=$tablicaDoPrzepisania[$i];
	}
	return $newString;
}

function szyfr3($numerKonta)
{   // szyfruje ciag po zadanej tablicy gdzie wartosc pól maptablicy
    //okresla miejsce jakie ma zajac w nowym ciagu liczba, znajdujaca sie
    //w polu o kluczu równym kluczowi matTablicy
	
	$mapTablica = array(21, 4, 8, 23, 16, 17, 0, 22, 15, 20, 24, 3, 14, 5, 10, 19, 18, 1, 13, 6, 25, 7, 11, 2, 12, 9);
	$wynik = '';
	
	foreach ($mapTablica as $klucz => $element)
	{
		$wynik[$element] = $numerKonta[$klucz];
	}
	
	return tablicaNaString($wynik);

}
 
function reSzyfr3 ($numerKonta)
{
	$mapTablica = array(21, 4, 8, 23, 16, 17, 0, 22, 15, 20, 24, 3, 14, 5, 10, 19, 18, 1, 13, 6, 25, 7, 11, 2, 12, 9);
	$newMapTablica = '';
	
	foreach ($mapTablica as $klucz => $element)
	{
		$newMapTablica[$element] = $klucz;
	}
	
	foreach ($newMapTablica as $klucz => $element)
	{
		$wynik[$element] = $numerKonta[$klucz];
	}
	
	return tablicaNaString($wynik);
}

function kodowanie($haslo, $mapTablica)
// wycina litery z hasla zadane w tablicy,
// zwraca tablice 2 elemetow¹
// [0] = string z hasla z powycinanymi literami
// [1] = md5 ze sklejonego w/w stringa i stringa z wycietych liter
{
	$part1 ='';
	
	foreach ($mapTablica as $key => $value)
	{
		$part1[$key] = $haslo[$value];
		$haslo[$value] = null;
	}
	
	$zlep = $haslo.tablicaNaString($part1);
	$element1 = $haslo;                        
	$element2 = md5($zlep);
	
	return $result =array($element1,$element2);

}

$accountNumber ='01234567890123456789012345';
$mapowanie = array(4,5,7,11,14,21,27,30,33,37);
$pasword = 'JaninaMaKrzyweNogiIopuchnietyPysk1990!';

//var_dump(kodowanie($pasword, $mapowanie)); //trzeba wyrzuciæ nulle czy nie???
//echo $newNumber = szyfr3($accountNumber)."\n";
//echo $odszyfrowana = reSzyfr3($newNumber);
//echo wstawSpacje($accountNumber);
//echo zamienMiejscami($accountNumber);
//echo szyfr2a($accountNumber);

