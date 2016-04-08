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

echo dd_strrev('text');
?>