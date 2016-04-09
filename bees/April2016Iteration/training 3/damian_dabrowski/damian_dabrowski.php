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

function dd_strpos($fragment ,$wyraz){
	$dlugoscFrag = dd_strlen($fragment);
	$dlugoscWyr = dd_strlen($wyraz);
	
	for ($i = 0; $i < ($dlugoscWyr - $dlugoscFrag); $i++) {
		if( dd_substr($i, $dlugoscFrag, $wyraz) === $fragment) return $i;
	}
	return "nie ma!";
}

$napis = 'neandertalczyk';
echo "\n";
echo dd_substr(2, 4, $napis);
echo "\n";
echo 'fragment znajduje sie na pozycji: '.dd_strpos('tal', $napis);


?>