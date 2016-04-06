<?php

//zadanie 1. drukuje co drugi znak z ci¹gu

$slowo ='cokolwiek lub cokolwiek innego';

$dlSlowa =   (strlen($slowo)-1);

for ($i = 1 ; $i < $dlSlowa; $i+=2)
{

	echo $slowo[$i]."\n";
}


//***********************************************************************

//zadanie 2. Drukuje co 3(podan¹ jako zmienna $oIle) znak z ci¹gu

$slowo ='cokolwiek lub cokolwiek innego';

$oIle = 1;

$dlSlowa =   strlen($slowo);

$i = $oIle-1;

for ($i ; $i < $dlSlowa; $i+=$oIle)
{

	echo $slowo[$i]."\n";
}


//**************************************************************************

//zadanie 3. drukuje pary znaków pierwszy-ostatni, drugi-przeostatni,..itd.

$slowo ='0123456789abiba9876543210';

$dlSlowa =   (strlen($slowo)-1);

for ($i = 0 ; $i <= $dlSlowa/2; $i++)
{
	if ($i ==  $dlSlowa/2)
	{
		echo $slowo[$i]."\n";
	}
	else
	{
		echo $slowo[$i];
		echo $slowo[($dlSlowa-$i)]."\n";
	}
}

//***************************************************************************

//zadanie 4. wyswietla kwotê podan¹ liczbowo do 9 cyfr => s³ownie 


function jedenDo9($badana)
{
	$jednosci = array('' , 'jeden', 'dwa', 'trzy', 'cztery', 'piec', 'szesc', 'siedem', 'osiem', 'dziewiec');

	foreach ($jednosci as $klucz => $element)
	{
		if ($klucz == $badana)
		{
			return ($element);
		}
	}
}

//echo jedenDo9(7);

function dziesietne($badana){

	if ( $badana[0] > 1)
	{
		$dziesiatki = array('', '', 'dwadziescia', 'trzydziesci', 'czterdziesci', 'piedziesiat', 'szescdziesiat', 'siedemdziedziat', 'osiedziesiat', 'dziewiedziesiat' );
			
		foreach ($dziesiatki as $klucz => $element)
		{
			if ($klucz == (int) $badana[0])
			{
				return $element."\n".jedenDo9($badana[1]);
			}
		}
	}
	else
	{
		$nastki = array('dziesiec', 'jedenascie','dwanascie', 'trzynascie', 'czternascie', 'pietrnascie', 'szesnascie', 'siedemnascie', 'osiemnascie', 'dziewietnascie');
			
		foreach ($nastki as $klucz => $element)
		{
			if ($klucz == (int) $badana[1])
			{
				return $element;
			}
		}
	}

}

//echo dziesietne('74') ;

function setne($badana)
{
	$setki = array('', 'sto', 'dwiescie', 'trzysta', 'czterysta', 'piecset', 'szescset', 'siedemset', 'osiemset', 'dziewiecset');

	foreach ($setki as $klucz => $element)
	{
		if ($klucz == (int) $badana[0])
		{
			$badana = substr($badana, 1,2);
			return $element."\n".dziesietne($badana);
		}
	}
}

//echo setne('223');

function przepisz($kandydat)
{

	$dlLiczby = (int) strlen($kandydat);

	if ($dlLiczby == 3)
	{
		return setne($kandydat);
	}
	if ($dlLiczby == 2)
	{
		return  dziesietne($kandydat);
	}
	if ($dlLiczby == 1)
	{
		return  jedenDo9($kandydat);
	}
};

//echo przepisz('020');

function konwertNaSlowa($liczba)
{
	$dlLiczby = (int) strlen($liczba);

	if ($dlLiczby >0 && $dlLiczby <4)
	{
		return (przepisz($liczba)."\n".'euro');
	}
	if ($dlLiczby >3 && $dlLiczby <7)
	{
		$tysiace = substr($liczba, -6, -3);
		$jed = substr($liczba, -3);
		return (przepisz($tysiace)."\n"."tys"."\n".przepisz($jed)."\n"."euro");
	}
	if ($dlLiczby >6 && $dlLiczby <10)
	{
		$miliony = substr($liczba, -9, -6);
		$tysiace = substr($liczba, -6, -3);
		$jed = substr($liczba, -3);

		return (przepisz($miliony)."\n"."mln"."\n".przepisz($tysiace)."\n"."tys"."\n".przepisz($jed)."\n"."euro");
	}

}
echo konwertNaSlowa('34543');

//troche pospagecilem na koncu ale juz noc i nie mialem sily dowymysalc,
