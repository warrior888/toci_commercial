<?php

function mj_strlen($str) {
	$i=0;
	while(isset($str[$i])) {
		$i++;
	}
	return $i;
}

function mj_strrev($str) {
	$revStr = "";
	for($i=mj_strlen($str)-1; $i>=0; $i--) {
		$revStr .= $str[$i];
	}
	return $revStr;
}

function mj_strpos($string, $findEl, $offset = 0) {
	for($i=$offset; $i<mj_strlen($string); $i++) {
		if(mj_substr($string, $i, mj_strlen($findEl)) == $findEl) {
			return $i;
		}
	}
	return false;
}

function mj_substr($string, $start, $length = false) {
	$strLenght = mj_strlen($string);
	$returnStr = "";
	$forIterStart = $start;

	if(!$strLenght) {
		return false;
	}

	if(!($start>=0 && $start<$strLenght)) {
		$forIterStart = $strLenght-abs($start);
	}

	for($i=$forIterStart; $i<$strLenght; $i++) {
		$returnStr .= $string[$i];
		if($length && mj_strlen($returnStr) == $length) {
			break;
		}
	}
	return $returnStr;
}

function mj_str_replace($search, $replace, $subject) {
	$strOffset = 0;
	$firstChar = 0;
	
	if(!is_array($search)) {
		while(true) {
			$firstChar = mj_strpos($subject, $search, $strOffset);
			if($firstChar !== false) {
				$strOffset = $firstChar+1;
				$beforeStr = mj_substr($subject,0,$firstChar);
				$afterStr = mj_substr($subject, $firstChar + strlen($search));
				$subject = $beforeStr.$replace.$afterStr;
			} else {
				break;
			}
		}
	} else {
		for($i=0; $i<mj_strlen($search); $i++) {
			$subject = mj_str_replace($search[$i], $replace[$i], $subject);
		}
	}
	return $subject;
}

function mj_strtr($string, $from, $to) {
	for($i=0; $i<mj_strlen($from); $i++) {
		$string = mj_str_replace($from[$i], $to[$i], $string);
	}
	return $string;
}

$echoStr = "\n---strrev---\n";
$echoStr .= "lorem ipsum: ".mj_strrev("lorem ipsum")."\n\n";

$echoStr .= "---strpos---\n";
$echoStr .= "\"ipsum\" w \"lorem ipsum\": ".mj_strpos("lorem ipsum", "ipsum")."\n";
$echoStr .= "\"ipsum\" w \"lorem ipsum, lorem ipsum\": ".mj_strpos("lorem ipsum, lorem ipsum", "ipsum", 7)."\n\n";

$echoStr .= "---substr---\n";
$echoStr .= "\"lorem ipsum\" od 6: ".mj_substr("lorem ipsum", 6)."\n";
$echoStr .= "\"lorem ipsum\" od 6 limit 2: ".mj_substr("lorem ipsum", 6, 2)."\n";
$echoStr .= "\"lorem ipsum\" -5: ".mj_substr("lorem ipsum", -5)."\n\n";

$echoStr .= "---strtr---\n";
$echoStr .= "\"Hilla Warld\": ".mj_strtr("Hilla Warld","ia","eo")."\n\n";

$phrase  = "You should eat fruits, vegetables, and fiber every day.";
$healthy = array("fruits", "vegetables", "fiber");
$yummy   = array("pizza", "beer", "ice cream");

$echoStr .= "---str_replace---\n";
$echoStr .= "\"string\": ".mj_str_replace("world", "Peter", "Hello world!")."\n";
$echoStr .= "\"tablica\": ".mj_str_replace($healthy, $yummy, $phrase)."\n";

echo $echoStr;