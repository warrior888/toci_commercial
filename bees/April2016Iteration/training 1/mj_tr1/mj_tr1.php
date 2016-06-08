<?php

// Dla chêtnych

function isPalindrom($str) {
	$revStr = "";

	for($i=strlen($str)-1; $i>=0; $i--)
		$revStr .= $str[$i];

	return $revStr == $str;
}

if(isPalindrom("kajak")) {
	echo "To slowo jest palindromem";
} else {
	echo "To slowo NIE jest palindromem";
}