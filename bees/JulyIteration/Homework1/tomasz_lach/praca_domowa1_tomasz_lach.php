<?php


$napis = "kajak";
$napis2 = "edek";
//echo $napis[-1];

function czyPalindrom($text)// zeby 
{
	//echo $text."\n";   //debugowanie

	if(strlen($text) >2)
	{	
		$last = strlen($text) - 1;

		if($text[0] === $text[$last])
		{
		$newWord = substr($text,1,-1);
		return czyPalindrom($newWord);
		}
		else
		{
			return False;
		}
	}
	else
	{
		return strlen($text) === 1 ? true : strlen($text) === 2 ? $text[0] === $text[1] : false;
	}
	
	if ($zm == 2)   // return $zm == 2 ? 3 : 4; 
	{
		return 3;
	}
	else
	{
		return 4;
	}
	
	
	
	//else
	//{
		echo "Słowo jest puste \n";
		return False;
//	}
}

var_dump(czyPalindrom($napis));
var_dump(czyPalindrom($napis2));
var_dump(czyPalindrom(""));






function CountOccurences($text)
{
	$result = array();
	for($i = 0; $i < strlen($text); $i++)
	{
		$letter  = $text[$i];
		isset($result[$letter]) ? $result[$letter]++ : $result[$letter] = 1;
	}
	
	return $result;
}


function czyAnagram($napis1, $napis2) 
{
	if ( strlen($napis1) == 0 || strlen($napis2) == 0)
	{
		return false;
	}
	else
	{	
		return  CountOccurences($napis1) == CountOccurences($napis2);
	}		
}

$txt1 = "burda";
$txt2 = "bruda";
$txt3 = "burdaa";

$txt4 = "";
$txt5 = "";

var_dump(czyAnagram($txt1, $txt2));
var_dump(czyAnagram($txt1, $txt3));
var_dump(czyAnagram($txt4, $txt5));