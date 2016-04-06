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
		echo "\n";
	} else {
		echo 'Pies nie jest glodny';
		echo "\n";
	}
	echo "\n";
	echo "\n";
	
	//is_nan
	$nan = 997;
	
	if (!(is_nan($nan))) {
		echo $nan . " is an int!";
		echo "\n";
	} else {
		echo $nan . " is not an int!";
		echo "\n";
	}
	
	if (is_int($nan)) {
		echo $nan . " is an int!";
		echo "\n";
	} else {
		echo $nan . " is not an int!";
		echo "\n";
	}
	
	if (is_float($nan)) {
		echo $nan . " is a float!";
		echo "\n";
	} else {
		echo $nan . " is not a float!";
		echo "\n";
	}
	//operatory
	// + - * / || && == === > < >= <= .
	
	//true false null
	
	//instrukacja warunkowa

	
	//petla
	
	//funkcje
	
	// operatory i petle typu isset,while, foreach, switch 
	
?>