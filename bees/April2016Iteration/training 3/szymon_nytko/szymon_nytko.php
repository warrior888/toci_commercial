<?php

function sn_reverse($y){
	$length = strlen($y);
	for($i=$length-1;$i >=0;$i--){
		echo $y[$i];
	}
}
sn_reverse("alaaaa");

function sn_palindrom($tekst){
    $slowo = strlower($tekst);
    $rozdziel = str_split($slowo);
    $odwrocSlowo = "";
    $dlugosc = strlen($slowo);
    for($i = 0; $i < $dlugosc; $i++){
    	$odwrocSlowo .= $rozdzielone[$dlugosc - $i - 1];
    }
        if( $slowo == $odwrocSlowo)
            return "Palindrom! :)" ;
        else
            return "Nope, to nie jest palindrom :(";
    }
sn_palindrom("Ala");



