<?php
	
	require_once 'AnagramSortowanie.php';
	$kandydat = 'aabb';
	$kandydat2 = 'abac';
	
	$tablica = array();
	$tablica2 = array();
	$tablica = str_split($kandydat);
	$tablica2 = str_split($kandydat2);
	$dlugosc = sizeof($tablica);
	echo "Dlugosc pierwszego slowa to: " . $dlugosc . "\n";
	$dlugosc2 = sizeof($tablica2);
	echo "Dlugosc drugiego slowa to: " . $dlugosc2 . "\n";
	
	if ($dlugosc == $dlugosc2)
	{
		echo "Dlugosci slow sa takie same wiec mozna jechac dalej";
	} else {
		echo "Dlugosc slow roznia sie wiec wyraz nie jest anagramem";
	 return false;
	}
	
	
	
	if (EmesSort($tablica) == EmesSort($tablica2))
	{
		echo "\nSa";
	} else {
		echo "\nNie sa";
	}

	
	function AreAnagrams($cand1, $cand2)
	{
		$cand1Ar = array();
		$cand2Ar = array();
		
		for ()
		{
			for()
			{
				
			}
		}
	}
	
	function  AreAnagrams($cand1, $cand2)
	{
		//return sort($cand1) == 
	}
	
	
	


	


