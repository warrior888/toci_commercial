<?php

$table=array('a'=>1, 'b'=>2, 'c'=>3);

patrycjamecinaFindElementInTable($table, 'b');

patrycjamecinaOwnSubString("beatka", 2,3);

patrycjamecinaLetterPosition("beatka", 'b');

patrycjamecinaCountLetters("beatka");

$wynik = patrycjamecinaStringPosition("beatka", "be");
//echo $wynik;

patrycjamecinaStringReplace("beata", "ta", "tka");




function patrycjamecinaFindElementInTable($table, $element)// 'a' => 'wartosc', 'b' => 'wartosc', 'c' => 'wartosc dla c', 3 wynikiem wartosc dla c
{
	//$i = 1;
	// foreach
	// if $i == $element
	foreach ($table as $key => $value)
	{
		if( $key == $element )
			echo $table[$key] ."\n";
	}
		
}

function patrycjamecinaOwnSubString($text, $start, $length) // text, 1, 2 => ex; beatka , 2 , 2 => at
{
	$result="";
	for($i=$start; $i<$start+$length; $i++)
	{
		$result.=$text[$i];
	}
	echo $result ."\n";
	return $result;
	
}

function patrycjamecinaLetterPosition($text, $letter) // beatka, e => 1, beatka , a => 2
{
	
	for($i=0; $i<strlen($text); $i++)
	{
		if ($letter==$text[$i])
			echo $i."\n";
	}
	
}

function patrycjamecinaCountLetters($string)
{
	// beatka => array ('b' => 1, 'e' => 1, 'a' => 2, 't' => 1, 'k' => 1)
	// text => array('t' => 2, ...)

	//nie umiem
	}
	

function patrycjamecinaStringPosition($text, $needle) // beatka, tk => 3; beatka , fds, => -1
{
	
	//echo $result ."\n";
	//return $result;
	
	for($i=0; $i<strlen($text);$i++)
	{
		$result="";
		for($j=$i; $j<$i+strlen($needle); $j++)
		{
			$result.=$text[$j];
		}
		if( $result == $needle )
			return $i;
			
	}
	return (-1);
	
}

function patrycjamecinaStringReplace($text, $needle, $replace) // str_replace : beata, ta, tka => beatka
{
	$wynik = patrycjamecinaStringPosition($text,$needle);
	//echo $wynik . "\n";
	//echo strlen($text);
	
	for( $i = $wynik ; $i < strlen($text) ; $i++ )
	{
		$text[$i] = "";
	}
	//echo $text;
	
	$text.=$replace;
	
	echo $text;
}