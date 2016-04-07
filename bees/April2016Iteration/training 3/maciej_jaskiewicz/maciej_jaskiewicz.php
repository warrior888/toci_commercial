<?php

function mj_strrev($str) {
	$revStr = "";
	
	for($i=strlen($str)-1; $i>=0; $i--) {
		$revStr .= $str[$i];
	}
	
	echo $revStr;
}

// petla sprawzdajaca od poczatku i od konca
function isPalindrom($str) {
	return mj_strrev($str) == $str;
}

function mj_strlen($str) {
	$i=0;
	while(isset($str[$i])) {
		$i++;
	}
	return  $i;
}

function mj_strpos($string, $findEl) {
	for($i=0; $i<mj_strlen($string); $i++) {
		if($string[$i] == $findEl) {
			return $i;
		}
	}
	return false;
}

$string = "cokolwiek";
echo "Dlugosc tekstu: ".mj_strlen($string)."\n";

if(isPalindrom("kajak")) {
	echo "To slowo jest palindromem\n";
} else {
	echo "To slowo NIE jest palindromem\n";
}

echo mj_strrev($string)."\n";

echo mj_strpos($string, "l")."\n";
