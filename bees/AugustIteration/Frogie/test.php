<?php

if(!isset($argv[1]))
{
	echo "Podaj imie dziecka.";
	exit;
}
//$nazwa = $argv[1];

/*$mama = null;

for($i = 1; isset($argv[$i]); $i++)
{
	$nazwa = $argv[$i];
	echo $nazwa."\n";
	if ($nazwa=='Dominik' || $nazwa=='Kacer' || $nazwa=='Kuba') 
	{
		$mama = 'Aneta';
	}
	if ($nazwa=='Weronika') 
	{
		$mama = 'Asia';
	}
	if ($nazwa=='Philip' || $nazwa=='Julia') 
	{
		$mama = 'Jola';
	}
	if ($nazwa=='Wikunio') 
	{
		$mama = 'Beata';
	}
	echo $nazwa.' ma mamusie o imieniu '.$mama."\n";
}*/

//$imionaDzieci = array('Dominik','Kacper','Kuba','Weronika','Philip','Julia','Wikunio');

$dzieciAnety = array('Dominik','Kacper','Kuba');
$dzieciAsi = array('Weronika');
$dzieciJoli = array('Philip','Julia');
$dzieciBeaty = array('Wikunio');


$tablice = array('Aneta' => $dzieciAnety, 'Asia' => $dzieciAsi, 'Jola' => $dzieciJoli,'Beata' => $dzieciBeaty);
//$rodzice = array('Aneta','Asia','Jola','Beata');

for($i = 1; isset($argv[$i]); $i++)
{
	$nazwa = $argv[$i];
	$mama = PodajKluczTablicySzukanegoElementu($tablice, $nazwa);
	//echo $nazwa."\n";
	/*if (CzyElementJestWTablicy(SzukajTablicy($tablice,$nazwa),nazwa))//Dominik==Array 
	{
		$mama = 'Aneta';
	}*/
	/*if (CzyElementJestWTablicy($dzieciAsi,$nazwa)) 
	{
		$mama = 'Asia';
	}
	if (CzyElementJestWTablicy($dzieciJoli,$nazwa)) 
	{
		$mama = 'Jola';
	}
	if (CzyElementJestWTablicy($dzieciBeaty,$nazwa)) 
	{
		$mama = 'Beata';
	}*/
	echo $nazwa.' ma mamusie o imieniu '.$mama."\n";
	
}
function PodajKluczTablicySzukanegoElementu($tablice,$szukanyElement)
{
	//for($i = 0; $i < DlugoscTablicy($tablice) ;$i++)
	
		 //$tablica = $tablice[$i];//poszczegolna tablica
	foreach ($tablice as $imieMamy => $tablicaDzieci)
	{
		if(CzyElementJestWTablicy($tablicaDzieci,$szukanyElement))
		{
			return $imieMamy;
		}
	}
					
	return false;
}

function CzyElementJestWTablicy($tablica, $elementSzukany)
{
	//var_dump("dl tab: ".DlugoscTablicy($tablica));
	for($i = 0; $i < DlugoscTablicy($tablica) ;$i++)
	{
		if($tablica[$i] == $elementSzukany)
		{
			return true;
		}
	}
	return false;
}

function DlugoscTablicy($tablica)
{
	$i = 0;
	for(; isset($tablica[$i]); $i++)
	{
		//var_dump("w petli: ".$i);
	}
	
	//var_dump("po petli: ".$i);
	
	return $i;
}




