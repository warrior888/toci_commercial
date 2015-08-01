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
pierwszaOstatnia1("g");

//na indeksach tablicy
function pierwszaOstatnia2($text)
{
	$poczatek = 0;
	$koniec = strlen($text)-1;

	if ($koniec>=0)
	{

		echo "pierwszaOstatnia iteracyjnie \n";

		while($poczatek != $koniec)
		{
			echo $text[$poczatek]."\n";
			echo $text[$koniec]."\n";
			$poczatek++;
			$koniec--;
		}

		echo $text[$poczatek]."\n";
	}
	else
	{
		echo "text jest pusty \n";
	}
}

pierwszaOstatnia2($testowa);
pierwszaOstatnia2("");
pierwszaOstatnia2("f");

function pierwszaOstatnia3($text)
{
	echo "pierwszaOstatnia na petli for \n";
	$poczatek = 0;
	$koniec = strlen($text)-1;

	$iterations = (int) (strlen($text)/2)+1;

	for($i = 0; $i<$iterations; $i++)
	{
		echo $text[$poczatek]."\n";
		echo $text[$koniec]."\n";
		$poczatek++;
		$koniec--;

		if($poczatek ==$koniec)
		{
			echo $text[$poczatek]."\n";
			break;
		}
		//var_dump($iterations);
	}
}

$tescik2 = "1234567";
pierwszaOstatnia3($tescik2);

// $tescik = "xyz";
// ecjp $tescik[-1];
// echo end($tescik);
	
	// zad 4 * 
$kwotaPrzelewu = 524135412;


//echo ceil(log10($kwotaPrzelewu));
//echo log10($kwotaPrzelewu);

function numberToWords($number)
{
	// 1. podzielic liczbe na 3 elementowe podliczby
	// 2. odczytac wartosc liczby bez oznaczenia wielkosci np. sto dwadziescia trzy
	// 3. w zaleznosci od polozenia podliczby dopisac oznaczenie wielkosci np. milionów, tysiecy etc
	$jednostki = array();
	$jednostki[0]='';
	$jednostki[1]='jeden';
	$jednostki[2]='dwa';
	$jednostki[3]='trzy';
	$jednostki[4]='cztery';
	$jednostki[5]='pięć';
	$jednostki[6]='sześć';
	$jednostki[7]='siedem';
	$jednostki[8]='osiem';
	$jednostki[9]='dziewięć';

	$nastki = array();
	$nastki[10]='dziesięć';
	$nastki[11]='jedenascie';
	$nastki[11]='dwanaście';
	$nastki[13]='trzynaście';
	$nastki[14]='czternaście';
	$nastki[15]='piętnaście';
	$nastki[16]='szesnaście';
	$nastki[17]='siedemnaście';
	$nastki[18]='osiemnaście';
	$nastki[19]='dziewiętnaście';


	$dziesiatki = array();
	$dziesiatki[0]='';
	$dziesiatki[10]='dziesięć';
	$dziesiatki[20]='dwadzieścia';
	$dziesiatki[30]="trzydzieści";
	$dziesiatki[40]="czterdzieści";
	$dziesiatki[50]="pięćdziesiąt";
	$dziesiatki[60]="sześćdziesiąt";
	$dziesiatki[70]='siedemdziesiąt';
	$dziesiatki[80]='osiemdziesiąt';
	$dziesiatki[90]='dziewięćdziesiąt';

	$setki = array();
	$setki[0]="";
	$setki[100]="sto";
	$setki[200]="dwieście";
	$setki[300]="trzysta";
	$setki[400]="czterysta";
	$setki[500]="pięćset";
	$setki[600]="sześćset";
	$setki[700]="siedemset";
	$setki[800]="osiemset";
	$setki[900]="dziewięćset";

	//1 tysiac, 2-4 tysiace, 5-999 tysiecy
	//1 milion, 2-4 miliony, 5-999 milionów
	//1 miliard, 2-4 miliardy, 5-999 miliardów
	//1 bilion, 2-4 biliony, 5-999 bilionów
	$wartosci = array(
		array("","", ""),
		array("tysiąc","tysiące", "tysięcy"),
		array("milion", "miliony", "milionów"),
		array("miliard", "miliardy", "miliardów"),
		array("bilion", "biliony", "bilionów")
		);


//materiał na oddzielną funkcję!!!!!
	$skladowe = array();

	while ($number >=1000)
	{
		$rest = $number % 1000;
		$number = floor($number / 1000);
		//var_dump($number)."\n";
		array_push($skladowe, $rest);

	}
	array_push($skladowe, $number);
	//var_dump($skladowe);


	//odwracanie tablicy
	$skladowe = array_reverse($skladowe);


//materiał na oddzielną funkcję
//zamiana 3 cyfrowej liczby na słowa

//1 podziel przez 100, aby wiedzieć ile setek i odjąć tę wartość od liczby
//2 podziel przez 10, aby wiedzieć czy liczy naście czy dziesiąt, czy zero,
//2a jeżeli naście to sprawa prosta
//jeżeli dziesiąc to  dzielimy %10 i to co wyjdzie to jednostki

	//var_dump(count($skladowe));

	$wartosc = count($skladowe)-1;

	//$buffer = "";

	foreach($skladowe as $number2)
	{
		$buffer = $number2;



		$hundreds = floor($number2 / 100);
		$hundreds = $hundreds *100;
		//var_dump($hundreds);
		echo $setki[$hundreds]."\n";

		$number2 = $number2 - $hundreds;

		$tens = floor($number2 / 10);
		//var_dump($tens);

		if ($tens == 1)
		{
			echo $nastki[$number2]."\n";
		}
		else
		{
			$tens = $tens * 10;
			//var_dump($tens);
			echo $dziesiatki[$tens]."\n";

			$number2 = (int) ($number2 - $tens);
			//var_dump($number2);
			echo $jednostki[$number2]."\n";
		}


		if ($buffer == 1)
		{
			echo $wartosci[$wartosc][0]."\n";
		}
		elseif ($buffer > 1 && $buffer < 5)
		{
			echo $wartosci[$wartosc][1]."\n";
		}
		elseif ($buffer >=5)
		{
			echo $wartosci[$wartosc][2]."\n";
		}


		$wartosc-=1;
	}

	echo $jednostki[5];



}




numberToWords(655314000);





	// piec dwa cztery

	// piecset dwadziescia cztery miliony sto trzydziesci piec tysiecy czterysta dwanascie

	// zad 5 ***
	//sprawdzanie czy wyraz zawiera się w innym wyrazie, oraz  ile razy w danym stringu dany wyraz się pojawił
	//zagnieżdżanie pętli w pętli

	// szczegolnosc osci nie prezklada sie na kosci   osc => true  dgshaj => false