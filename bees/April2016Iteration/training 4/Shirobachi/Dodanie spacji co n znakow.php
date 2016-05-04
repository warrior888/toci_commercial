<?php 

$nrkonta= "76116022020000000297991972"; $n = 4;

function FormatNrKonta($nrkonta, $n)
{
	$wynik = '';
	
	for($i=0; $i<strlen($nrkonta); $i++)
	{
		$wynik .= $nrkonta[$i];
		if($i % $n == $n-1)
		{
			$wynik .= " ";
		}//if
	}//for
	return $wynik;
}//fun

echo FormatNrKonta($nrkonta, $n);