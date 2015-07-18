<?php
// $rok = 2015;
// echo $rok;
// $rok = 5;
// echo $rok;

// $rok = 2015;

// if(123==2345)
// {
// 	$rok = 2016;
// }

echo "\n";

$licznikGorny = 4;
$licznikSrodkowy = 0;
$licznikDolny = 0;

$test = 0;

for($licznikDolny; $licznikDolny<8; $licznikDolny++)
{
	for($licznikSrodkowy = 0; $licznikSrodkowy< 8; $licznikSrodkowy++)
	{
		for($licznikGorny = 0 ; $licznikGorny <8; $licznikGorny++)
		{

			//echo "Text \n";
			$test++;
			//$licznikGorny--;


			// if ($licznikGorny == 3)
			// {
			// 	//break 1;
			// }
		}
	}
}

//echo $test;
//echo "\n";

$ciekawa = 'piekna';

$piekna = 'slicznie';

//echo $$ciekawa;   //pojawi sie slowo 'slicznie' - wpierw ewaluuje wartość zmiennej ciekawa, dostaje słowo piękan, i dolec z piękną dają ślicznie

$slicznie = 'ciekawa';

// echo $$$$ciekawa;
// echo "\n";

$fn = 'Pierwsza';


//$fn();

// if( 2 ==3)		//warunkowe definiowanie funkcji, w js to się uda, w php dopóki warunek sięnie spełni funcja nie zadziała już nie
// {
	function Pierwsza()
	{
		echo "pierwsza działa \n";
	}
// }


$text = 'slowo';
$text = 5;

$text = $text.$text;

//echo $text."\n";

$tablice = array(2,3,4,5,6, array('fadsfadfa',9,8)); //array to funkcja !!!!

//var_dump($tablice); // ważna

//echo $tablice;
echo "\n";


$tablicaIndexowanaCustomowo = array( 'dzien_dobry' =>$tablice, 2 => 5, 'klucz' => 'magia',0, 5 => 12, 4 =>4, 9 => 234, 123); // zawsze ustala najwyższa wartośći kolejny indekx to ta najwyższa wartość + 1


$tablicaIndexowanaCustomowo['cyrk_z_kosmosu']= &$tablicaIndexowanaCustomowo; //referencja - fizyczny adres zmiennej i dać go do innej zmiennej

//var_dump($tablicaIndexowanaCustomowo);

$asoc = array(
	'klucz' => 'wartość',
	'asf' => array($tablicaIndexowanaCustomowo),
	'klucz' => 'dance'
	);

//var_dump($asoc);


//drukujTabliceTablic($tablicaIndexowanaCustomowo);

function drukujTabliceTablic($TablicaIndexowanaCustomowo)
{


	foreach ($TablicaIndexowanaCustomowo as $key => $value)
	{
		if (is_array($value))
		{
			echo "Trafiłem tablice\n";
			drukujTabliceTablic($value);
		}
		else
		{
			echo 'Klucz to: '.$key." a wartość to: ".$value."\n";
		}
	}
}

//var_dump($tablicaIndexowanaCustomowo);


function ZwrocBank($numerKonta)
{
	//$bankid ='';
	$bankid =substr($numerKonta, 2, 4);
	//echo $bankid;


	$banki = array('1010'=>'Narodowy Bank Polski',
					'1020'=>'PKO BP',
					'1030'=>'Citybank Handlowy',
					'1050'=>'ING',
					'1060'=>'BPH',
					'1090'=>'BZ WBK',
					'1130'=>'BGK',
					'1140'=>'mBank',
					'1160'=>'Bank Millennium',
					'1240'=>'Pekao',
					'1280'=>'HSBC',
					'1300'=>'Meritum Bank',
					'1320'=>'Bank Pocztowy',
					'1440'=>'Nordea Bank',
					'1470'=>'Euro Bank',
					'1540'=>'BOŚ',
					'1580'=>'Mercedes-Benz Bank Polska',
					'1600'=>'BNP Paribas Fortis',
					'1610'=>'SGB - Bank',
					'1670'=>'RBS Bank (Polska)',
					'1680'=>'Plus Bank',
					'1750'=>'Raiffeisen Bank',
					'1840'=>'Societe Generale',
					'1870'=>'FM Bank PBP',
					'1910'=>'Deutsche Bank Polska',
					'1930'=>'Bank Polskiej Spółdzielczości',
					'1940'=>'Credit Agricole Bank Polska',
					'1950'=>'Idea Bank',
					'2000'=>'Rabobank Polska',
					'2030'=>'BGŻ',
					'2070'=>'FCE Bank Polska',
					'2120'=>'Santander Consumer Bank',
					'2130'=>'Volkswagen Bank',
					'2140'=>'Fiat Bank Polska',
					'2160'=>'Toyota Bank',
					'2190'=>'DnB Nord',
					'2480'=>'Getin Noble Bank',
					'2490'=>'Alior Bank',
					'102' => "tomaszek") ;

	return $banki[$bankid];
}

 echo ZwrocBank('8610202498000086020263XXXX')."\n";