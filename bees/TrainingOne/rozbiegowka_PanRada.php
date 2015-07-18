<?php


// nrkonta 12 1020 34343434
// roznica w drugiej

$numerKonta = 2103023232323;

zwrocBank($numerKonta);

function zwrocBank () {
	$wycinek = substr($numerKonta,2,4);
	$bank = array (

	'1020' => 'ING',
	'1030' => 'BGZ',
	'1040' => 'BZ',

	);

//	foreach ($bank as $key => $value) {
	
	
//		return $key . "To jest bank".$value;
		
//	

//	}

return	$bank[$wycinek];
}

