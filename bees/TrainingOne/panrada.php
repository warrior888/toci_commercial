<?php

// $rok = 2015;

$licznikGorny = 4;
$licznikSrodkowy = 0;
$licznikDolny = 0;

$test = 0;
for ($licznikDolny; $licznikDolny < 8; $licznikDolny++)
{
for($licznikSrodkowy; $licznikSrodkowy < 8; $licznikSrodkowy++)
{
for($licznikGorny; $licznikGorny < 8; $licznikGorny++)
{
	// echo "text \n";
	$test++;

if ($licznikGorny == 3)
{
	// break;
}

}

}

}


$ciekawa = 'piekna';

$piekna = 'slicznie';

$slicznie = 'ciekawa';

// echo $$piekna;

$fn = 'Pierwsza';

// $fn();

function Pierwsza()
{
	//echo 'pierwsza dziala';
}


$tekst = 'slowo';
// $text = 5;

$text = $text . $text;

echo $text;

$tablica = array(2,2,3,4,5);

// var_dump($tablica);

$tablicaIndexowanCustomowana = array(2 => 5,'klucz'=>'cyrk',  8, 'ruu' => $tablica );
//var_dump($tablicaIndexowanCustomowana);

$asoc = array (
	'klucz' => 'wartosc',
	'table' => array($tablicaIndexowanCustomowana)

	);

//var_dump($asoc);

// drukujTabliceTablic($tablicaIndexowanCustomowana);

function drukujTabliceTablic ($tablicaIndexowanCustomowana)
{
foreach ($tablicaIndexowanCustomowana as $key => $value) {
	
	if (is_array($value))
	{ 
		echo "Trafilem tablice";
		drukujTabliceTablic($value);
	}	
	else {

		echo 'klucz to: ' . $key . 'a wartosc to: ' . $value . "\n";
	}
}

}


// nrkonta 12 1020 34343434
// roznica w drugiej

$numerKonta = 2103023232323;

zwrocBank($numerKonta);

function zwrocBank () {
	$wycinek = substr($numerKonta,2,4);
	$bank = array (

	'1020' => 'ING',
	'1030' => 'BGZ',
	'1040' => 'BZ',

	);

	foreach ($bank as $key => $value) {
	
	if ($key == '1020')
	{
		return "To jest bank".$value;
	}
	elseif ($key == '1030') {
		return "To jest bank".$value;
	}
	else ($key == '1040') {
		return "To jest bank".$value;

	} 	
	

	}
}

