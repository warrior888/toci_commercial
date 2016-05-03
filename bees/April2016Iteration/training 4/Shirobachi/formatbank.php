<?php 

$nrkonta= "76116022020000000297991972";

function FormatNrKonta($nrkonta)
{
	$wynik = '';
	
	for(&i=0; &i<strlen($nrkonta); $i++)
	{
		$wynik .= $nrkonta[$i];
		if($i % 4 == 3)
		{
			$wynik .= " ";
		}//if
	}//for
}//fun

echo FormatNrKonta($nrkonta);