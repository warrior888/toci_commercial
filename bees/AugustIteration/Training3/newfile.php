<?php

//25
	//require_once 
				//     0           1
	$tablica = array('kotek' => array('klucz' => 'dachowiec', 2 => 'tygrysek', 'lew'), 'piesek');
	
	// zad 1 uruchomic to dla tablicy peseli
	
	// zad 2 zaimplementowac sprawdzenie dnia miesiaca i roku
	
	// zad 3 uzycie w RozdzielDatePeselu funkcji i sprawdzenie czy data ok
	
	// zad 4 z wagami przeliczyc elementy peselu i sprwdzic cyfre kontrolna
	
	// asocjacyjna
	//echo $tablica['kotek'][3]; // kotek
	
	$pesel = '84080818074';
							// 20
	$peselPoDwutysiecznym = '11241411113';
	
	function WytnijDateZPesel($text)
	{
		return substr($text, 0, 6);
	}
	
	function RozdzielDatePeselu($dataZPeselu)
	{
		//840808
		$rok = substr($dataZPeselu, 0, 2);
		$miesiac = substr($dataZPeselu, 2, 2);
		$dzien = substr($dataZPeselu, 4, 2);
		
		//if (SprawdzDzien() && )
		
		return "Rok: ".$rok.", miesiac: ".$miesiac.", dzien: ".$dzien;
	}
	
	function SprawdzMiesiac($kandydat)
	{
		
	}
	
	function SprawdzDzien($dzien, $miesiac, $rok)
	{

		
		if ($miesiac == 2)
		{
			if ($dzien > 29)
			{
				return false;
			}
			if (CzyRokPrzestepny($rok))
			{
				// luty 29
			}
		}
		
		return false;
	}
	
	function SprawdzRok($rok)
	{
		
	}
	
	function CzyRokPrzestepny($rok)
	{
		
	}
	
	function SprawdzSumeKontrolna($pesel)
	{
		
	}
	
	$data = WytnijDateZPesel($pesel);
	//echo "\n";
	$dataDziecka = WytnijDateZPesel($peselPoDwutysiecznym);
	
	echo RozdzielDatePeselu($pesel);
	echo RozdzielDatePeselu($dataDziecka);