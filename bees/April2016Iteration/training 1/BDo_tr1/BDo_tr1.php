<?php

	echo "\n";
	echo 'To dziala';
	echo "\n"; 
	
	//zmienne
	$wiek = 19;
	
	$limitWieku = 18;
	$limitEmerytalny = 67;
	$genderWomen = false;
	
	if (($wiek >= $limitWieku) && ($wiek <= $limitEmerytalny) && !($genderWomen)) {
		echo "\n";
		echo 'Masz '.$wiek.', jestes pelnoletni, nie przekraczasz wieku emerytalnego, i jestes mezczyzna.';
		echo "\n";
	} else {
		echo "\n";
		echo 'Masz '.$wiek.', jestes gimbus';
		echo "\n";
	}
	
	//logika
	$piesGlodny = true;
	$piesNakarmiony = false;
	
	if ($piesGlodny===true) {
		$piesNakarmiony = true;
		echo 'Pies zostal nakarmiony';		
	} else {
		echo 'Pies nie jest glodny';
	}
	
	
	//is_nan
	$nan = sqrt(100);	
	var_dump($nan, !(is_nan($nan)));
	
	//operatory
	// + - * / || && == === > < >= <= .
	
	//true false null
	
	//instrukacja warunkowa

	
	//petla
	
	//funkcje
	
	// operatory i petle typu isset,while, foreach, switch 
	
?>