<?php

function eb_strrev($text)
{
	for($i = strlen($text) - 1; $i >= 0; $i--) 
	{
		$revStr .= $text[$i];
	}
	return $revStr;
}
function eb_strpos($text, $searched)
{
	$index = 0;  
	$strend = strlen($searched) - 1;
	for($i = 0; $i <= strlen($text) - 1; $i++)
	{
		if($text[$i] == $searched[$index])
		{
			$encounter = $i;
			for(; $text[$i] == $searched[$index]; ++$index, ++$i)
			{
				if($index == $strend)
				{
					return $encounter;
				}
			}
			$index = 0;
			$encounter = 0;
		}
	}
}

function eb_palindrom($strOrg, $strRev)
{
	return $strOrg == $strRev;
}

$string = 'dywan';
$stringrev = eb_strrev($string);
echo "\n"."Odwrocone slowo: $stringrev"."\n";

if(eb_palindrom($string, $stringrev))
{
	echo "\n"."Slowo jest palindromem"."\n";
}else 
{
	echo "\n"."Slowo nie jest palindromem"."\n";
}

$strsearch = 'wa';
$position = eb_strpos($string, $strsearch);
if($position != null)
{
	echo "\n"."Podany fragment znajduje sie na pozycji: $position"."\n";
}else 
{
	echo "\n".'W tekscie nie wystepuje podany fragment'."\n";
}