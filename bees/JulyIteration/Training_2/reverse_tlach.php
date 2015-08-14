<?php



$word_to_reverse = "ala ma kota, a kot ma aids";


function reverse($slowo)
{
	for ($i=(strlen($slowo)-1); $i>-1; $i--)
	{
		echo $slowo[$i]."\n";
	}
}


reverse($word_to_reverse);