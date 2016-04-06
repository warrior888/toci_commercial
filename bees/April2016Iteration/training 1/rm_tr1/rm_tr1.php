<?php
	/*======================================= Szkolenie 1 =======================================*/
	//WYSWIELTANIE
	echo "\n";
	echo 'To dziala';
	echo "\n";
	
	/*======================================= Szkolenie 2 =======================================*/
	//ZMIENNE
	$nazwa = 'tresc';
	$wiek = 12;
	$LimitWiekuDoroslosci = 18;
	
	//OPERATORY
	/* suma dwoch liczb +
	 * roznica dwoch liczb -
	 * iloczyn dwoch liczb *
	 * iloraz dwoch liczb /
	 * prawda jesli jedno z dwoch jest prawda||
	 * prawda jesli obie sa prawda &&
	 * sprawdza czy sa rowne ==
	 * sprawdza czy sa rowne i tego samego typu ===
	 * wieksze >
	 * mniejsze <
	 * wieksze lub rowne >=
	 * mniejsze lub rowne <=
	 * laczy kilka ciagow w jedna calosc .
	 * prawda jesli nie jest prawda !
	 * prawda jesli nie sa rowne !=
	 * prawda jesli nie sa rowne lub sa innego typu !==
	*/
	
	//INSTRUKCJA WARUNKOWA IF (ELSE)
	echo "\n";
	echo 'Osoba ma ' . $wiek . ' lat ';
	if ($wiek >= $LimitWiekuDoroslosci)
	{
		echo 'jest dorosla i ';
	}
	else
	{
		echo 'nie jest dorosla i ';
	}
	if ($wiek <= 6)
	{
		echo 'jest w domu :) - dziecko.';
	}
	if ($wiek > 6 && $wiek <= 12)
	{
		echo 'uczy sie w podstawowce.';
	}
	if ($wiek > 12 && $wiek <= 15)
	{
		echo 'uczy sie w gimnazjum.';
	}
	if ($wiek > 15 && $wiek <= 18)
	{
		echo 'uczy sie w liceum.';
	}
	if ($wiek > 18 && $wiek <= 24)
	{
		echo 'studiuje.';
	}
	if ($wiek > 24 && $wiek <= 67)
	{
		echo 'pracuje zawodowo.';
	}
	if ($wiek > 67)
	{
		echo 'jest na emeryturze.';
	}
	echo "\n \n";
	
	/*======================================= Moja praca =======================================*/
	$a = 5;
	$b = -8;
	$c = 1/2;
	$wzor = '(' . $a . ') * x^2 + (' . $b . ') * x + (' . $c . ')';
	$delta = $b^2-4*$a*$c;
	echo 'KALKULATOR ROWNAN KWADRATOWYCH' . "\n" . $wzor . "\n";
	echo 'Wartosc delty = ' . $delta . "\n";
	if ($delta > 0)
	{
		$x1 = -$b-sqrt($delta)/2*$a;
		$x2 = -$b+sqrt($delta)/2*$a;
		echo 'x1 = ' . $x1 . "\n";
		echo 'x2 = ' . $x2 . "\n";
	}
	if ($delta == 0)
	{
		$x = -$b/2*$a;
		echo 'x = ' . $x . "\n";
	}
	if ($delta < 0)
	{
		echo 'Delta < 0' . "\n" . 'BRAK ROZWIAZANIA';
	}
	
	/*======================================= Szkolenie 3 =======================================*/
	
?>