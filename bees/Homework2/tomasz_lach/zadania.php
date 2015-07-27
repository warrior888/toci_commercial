<?php


$text = 'cokolwiek lub ciokolwiek innego';

	// zad 0
	
function MojaDlugoscTextu($text)  //tozsame do strlen
{
	$dlugosc = 0;
	
	for ($dlugosc = 0; isset($text[$dlugosc]); $dlugosc++)
	{
		
	}
	
	return $dlugosc;
}

	// zad 1
function coDruga($text)
{
	echo "iterowanie co 2giej litery"."\n";
	if (strlen($text) >= 2)
	{
		for($i=1; $i<strlen($text); $i+=2)
		{
			echo $text[$i]."\n";
		}
	}
	else
	{
		echo "text".$text." jest za krótki aby iterować co drugą literę"."\n";
	}
}
	
coDruga($text);	
coDruga("ab");
	
    // zad 2
function coKtoras($text, $skok)
{
	echo "iterowanie co ".$skok." litery"."\n";
	if (strlen($text) >= $skok)
	{
		for( $i = ($skok -1); $i < strlen($text); $i+=$skok)
		{
			echo $text[$i]."\n";
		}
	}
	else
	{
		echo "text ".$text." jest za krótki aby iterowac co ".$skok." litere"."\n";
	}
}

coKtoras($text, 4);
coKtoras("buba", 4);
coKtoras("buba", 5);
	//dla zadania powyzej ma mi zadanialac tak, zebym mogl podac , co ktora literke ma mi wyswietlic
	
	// 3 k  w  k  u 
    
	// zad 3
//rekurencja
function pierwszaOstatnia1($text)
{
	//echo "pierwsza i ostatnia dla wyrazu ".$text."\n";
	if (strlen($text)>=2)
	{
		echo $text[0]."\n";
		echo $text[strlen($text)-1]."\n";
		pierwszaOstatnia1(substr($text, 1,-1));
	}
	else if (strlen($text) == 1)
	{
		echo $text[0]."\n";
	}
	else if(strlen($text) == 0)
	{
		echo "wyraz jest pusty!!\n";
	}

}

$testowa = "12345";
pierwszaOstatnia1($testowa);
pierwszaOstatnia1("");

//na indeksach tablicy
function pierwszaOstatnia2($text)
{}
	


// $tescik = "xyz";
// ecjp $tescik[-1];
// echo end($tescik);
	
	// zad 4 * 
	
	$kwotaPrzelewu ="524 135 412";
	// piec dwa cztery
	
	// piecset dwadziescia cztery miliony sto trzydziesci piec tysiecy czterysta dwanascie 
	
	// zad 5 ***
	
	// szczegolnosc osci nie prezklada sie na kosci   osc => true  dgshaj => false