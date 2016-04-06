<?php

function mj_strrev($str) {
	$revStr = "";
	
	for($i=strlen($str)-1; $i>=0; $i--) {
		$revStr .= $str[$i];
	}
	
	echo $revStr;
}

function isPalindrom($str) {
	$revStr = "";

	for($i=strlen($str)-1; $i>=0; $i--) {
		$revStr .= $str[$i];
	}

	return $revStr == $str;
}

function mj_strlen($str) {
	$i=0;
	while(isset($str[$i])) {
		$i++;
	}
	return  $i;
}

$string = "cokolwiek";
echo "Dlugosc tekstu: ".mj_strlen($string)."\n";

if(isPalindrom("kajak")) echo "To slowo jest palindromem"."\n";
else echo "To slowo NIE jest palindromem"."\n";

echo mj_strrev($string)."\n";
