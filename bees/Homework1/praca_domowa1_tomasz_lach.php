<?php


$napis = "kajak";
$napis2 = "edek";
//echo $napis[-1];

function czyPalindrom($text)
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
	elseif (strlen($text) === 2) 
	{
		if ($text[0] === $text[1])
		{
			return True;
		}
		else
		{
			return False;
		}
	}
	elseif (strlen($text) === 1 )
	{

		return True;
	}
	else
	{
		echo "Słowo jest puste \n";
		return False;
	}
}

var_dump(czyPalindrom($napis));
var_dump(czyPalindrom($napis2));
var_dump(czyPalindrom(""));







function czyAnagram($napis1, $napis2) 
{
	
	if ( strlen($napis1) == 0 or strlen($napis2) == 0)
		{
			return False;
		}
		else
		{	
				$text1 = str_split($napis1); //foreach nie można iterować stringa, trzeba go wpierw zmienic na array
				$text2 = str_split($napis2);
				$arr1 = Array();
				$arr2 = Array();

				foreach($text1 as $letter )
				{
					//echo $letter."\n";
					if( array_key_exists($letter, $arr1))
					{
						$arr1[$letter] += 1;
					}
					else
					{
						$arr1[$letter] = 1;
					}
				}
				//var_dump($arr1);

				foreach($text2 as $letter )
				{
					//echo $letter."\n";

					if( array_key_exists($letter, $arr2))
					{
						$arr2[$letter] +=1;
					}
					else
					{
						$arr2[$letter] = 1;
					}
				}
				//var_dump($arr2);

				if ($arr1 == $arr2)
				{
					return True;
				}
				else
				{
					return False;
				}
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