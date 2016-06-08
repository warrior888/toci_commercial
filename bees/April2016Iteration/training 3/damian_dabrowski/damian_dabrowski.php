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

function dd_strpos($fragment ,$wyraz){
	$dlugoscFrag = dd_strlen($fragment);
	$dlugoscWyr = dd_strlen($wyraz);

	for ($i = 0; $i <= ($dlugoscWyr - $dlugoscFrag); $i++) {
		if( dd_substr($i, $dlugoscFrag, $wyraz) == $fragment) return $i;
	}
	return "nie ma takiego podciągu!";
}

function dd_str_replace($co,$naCo, $wyraz){
	$wyrazZmieniony = "";
	$pozycja = dd_strpos($co, $wyraz);

	if($pozycja === "nie ma takiego podciągu!") {
		return $pozycja;
	} else {

		$dlugosc = dd_strlen($co);

		$czyWklejony = false;
		for($i = 0; $i <dd_strlen($wyraz); $i++){
			if($i < $pozycja || ($i > ($pozycja + $dlugosc-1))) {
				$wyrazZmieniony .= $wyraz[$i];
			}
			else {
				if(!$czyWklejony){
					$wyrazZmieniony .= $naCo;
				}
				$czyWklejony = true;
			}
		}
		return $wyrazZmieniony;
	}
}

echo dd_strrev('text');
echo "\n";
if(dd_isPalindrom("ala")){
	echo 'Wyraz jest palindromem!';
} else {
	echo 'Wyraz nie jest palindromem!';
}

$napis = 'neandertalczyk';
echo "\n";
echo dd_substr(2, 4, $napis);
echo "\n";
echo 'fragment znajduje sie na pozycji: '.dd_strpos('tal', $napis);
echo "\nZamiana substr: ".dd_str_replace('Hello', 'Damian', 'Hello world HAHA');
?>