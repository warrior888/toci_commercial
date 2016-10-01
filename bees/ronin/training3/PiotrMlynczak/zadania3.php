<?php

	function GetCode()
	{
		$handle = fopen('banki.txt', 'rw');
		$result = '';
		
		while($line = fgets($handle))
		{
			//var_dump($line);
			$codeAndBank = explode(" \t", $line);
			
			//var_dump($codeAndBank);
			$result .= '\''.$codeAndBank[0].'\' => \''.trim($codeAndBank[1]).'\', ';
			//var_dump(fputs($handle,'\''.$codeAndBank[0].'\' => \''.trim($codeAndBank[1]).'\', '));
		}
		
		return $result;
	}
	
	$res = GetCode();
	file_put_contents('banki_out.txt', $res);
	
	
	
	
	PRZY DRUGIM ZADANIU MOŻNA KORZYSTAĆ Z GOTOWYCH FUNKCJI A PRZY WALIDACJI DATY TJ. function ValidateDate ŻEBY NIE BYŁO TAK ŻE SKORZYSTAMY Z GOTOWEGO DATE TIME
	I ZROBIMY TRAJKECZA TYLKO FAKTYCZNIE ZWALIDOWAĆ DATĘ  // try // catch -- przechwytywanie bledow
	
	// 1. Sprawdzić czy data jest poprawna po jej rozcięciu w ten sposób "84 08 08", następnie zwalidować datę, a potem zwalidować cały pesel
	
	// na to jest algorytm z wikipedi, polecany bo tam dalej jest jak jest płeć, suma kontrolna itd. i zgodnie z tym zwalidować czy pesel jest poprawny
	
	function ValidatePesel($peselCandidate)
	{
		substr($peselCandidate, 0, 2);
		// wycina datę z peselu np. 84 08 08
		
		ValidateDate();
	
	}
	
	function ValidateDate($year, $month, $day) // funkcja ta ma sprawdzić czy data wycięta z peselu w function ValidatePesel jest datą i ta funkcja będzie
												// do wywołania w  function ValidatePesel
	{
		
	}
	
	
	//waliduj PESEL
	
function ValidatePesel($peselCandidate)
{
//sprawdzenie poprawnosci daty

$yy = substr($peselCandidate,0,2);
$mm = substr($peselCandidate,2,2);
$dd = substr($peselCandidate,4,2);

	if (ValidateDate($yy, $mm, $dd))
	{
		echo "<br/>PODANO PORPAWNE DANE DOT. DATY!!!";
	}
	
//sprawdzamy dlugosc NUMERU PESEL 

	if (strlen($peselCandidate) != 11)
	{
		echo "<br/>ZLA DLOGOSC NUMERU PESEL";
		return false;
	}
	
	
//sprawdzanie plci

$plec = substr($peselCandidate,9,1);
	if ($plec % 2 == 0)
	{
		echo "<br/>JESTES KOBIETA";
	}
		else 
		{
			echo "<br/>JESTES MEZCZYZNA";
		}
	
	
	if (ValidateChecksum($peselCandidate))
	{
		echo "<br/>SUMA KONTROLA JEST OK";
	}	
		else
		{	
			echo "<br/>SUMA KONTROLA JEST NIEPRAWIDLOWA!!!!!";
		}	
}





function ValidateChecksum($pesel)
{
    $sum = 0; // zmienna pomocnicza w ktorej trzymamy sume wag
	
    $weights = array(1, 3, 7, 9, 1, 3, 7, 9, 1, 3, 1); // Wagi dla kolejnych cyfr numeru PESEL

		foreach (str_split($pesel) as $i => $value)   // $i - $position, $value - $digit 
		{
			$sum += $value * $weights[$i];
		}
		
    return substr($sum % 10, -1, 1) == 0; // wycina ostatnią cyfrę z sumy kontrolnej ktora otrzymujemy po dodaniu wynikow z $sum += $digit * $weights[$i];
}






function ValidateDate($year, $month, $day)
{
	//wszystkie parametry musza byc dwocyfrowe	
	if (strlen($year) != 2)
	{
		echo "ROK MUSI MIEC 2 ZNAKI!";
		return false;
	}	
	if (strlen($month) != 2)
	{
		echo "MIESIAC MUSI MIEC 2 ZNAKI!";
		return false;
	}	
	if (strlen($day) != 2)
	{
		echo "DZIEN MUSI MIEC 2 ZNAKI!";
		return false;
	}		
		
	// rok musi zawierać  się przedziale 00-99	
	if ($year < 0 || $year > 99)
	{
		echo "PODANO NIEPRAWIDLOWY ROK";
		return false;
	}
	
	//miesiac musi zawierac sie w przedziale 01-12 lub 81 do 92, 21-32 lub 41-52	
	if (($month < 1 || $month > 12) && ($month < 81 || $month > 92) && ($month < 21 || $month > 32) && ($month < 41 || $month > 52))
	{
		echo "PODANO NIEPRAWIDLOWY MIESIAC";
		return false;
	}
	
	//dzien musi zawierac sie w przedizla 01-31
	if ($day < 1 || $day > 31)
	{
		echo "PODANO NIEPRAWIDLOWY DZIEN";
		return false;
	}	
	return true;	
}


ValidatePesel("87060915452");
	
	
	// 2. stworzyć tablicę tablic i w tych tablicach tablic rozlosować miny, stworzyć tablicę tablic  dla planszy sapera, 
	
	// przyjmujemy dowolny rozmiar tablicy, randomowo losujemy gdzie są bomby i wyliczamy wokół danej bomby cyfry które mają się pojawić, czyli
	
	// wchodzimy do każdej kratki i sprawdzamy ile wokół jest bomb i podajemy cyfrę
	
	// Zrobić to na dwa sposoby 
	
	function GenerateMinesweeperTable($dimx, $dimy, $bombsNumber)
	{
		array(array(), array()); // pierwszy sposób tablica w tablicy
		// 0 0 0 0 0 0 0 0 0 
		// 0
		// 0 0 0-1 0 1 1 1 1
		
		
		
		array();// drugi sposób jedna tablica czyli dimx razy dimy, i pierwsze zero z drugiego rzędu będzie przeniesione do pierwszego rzędu i będzie dziesięć
				// zer w pierwszym rzędzie a nie dziewięć jak w pierwszym sposobie
				// i po tej tablocy umiejętnie się poruszać żeby wyliczać jej odpowiednie wskazania
		
		// 0 0 0 0 0 0 0 0 0 0
		// 
		
		rand(0, $dimx - 1); // losowanie współrzędnych x, y, czyli od 0 do $dimx - 1 i od 0 do $dimy - 1 i tam gdzie się wylosują włożyć BOMBĘ CZYLI -1
		rand(0, $dimy - 1); 
	
	}
	
	function Show()
	{
		echo "0 1 -1 -1 1 0 0 \n";
		echo "0 1  2  2 1 0 0 \n";
	}