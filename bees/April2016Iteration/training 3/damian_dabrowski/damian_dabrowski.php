<?php
function dd_strlen($napis){
	for ($i = 0; isset($napis[$i]); $i++) {
	}
	return $i;
}

function dd_strrev($textIn){
	$textOut ='';
	for($i = dd_strlen($textIn) - 1; $i>=0; $i--){
		$textOut .= $textIn[$i];
	}
	return $textOut;
}

function dd_isPalindrom($wyraz){
	$wordLength = dd_strlen($wyraz);
	for($i =0; $i<$wordLength/2; $i++){
		if($wyraz[$i] != $wyraz[$wordLength - $i - 1]){
			return false;
		}
	}
	return true;
}

function dd_substr($od, $przez, $wyraz){
	$subs = "";
	for($i = $od; $i < $od + $przez; $i++ ){
		$subs .= $wyraz[$i];
	}	
	return $subs;
}

echo dd_strrev('text');
echo "\n";
if(dd_isPalindrom("ala")){
	echo 'Wyraz jest palindromem!';
} else {
	echo 'Wyraz nie jest palindromem!';
}

echo "\n";
echo dd_substr(2, 4, "neandertalczyk");
echo "\n";


?>