<?php

//$nrKonta = '12105046375623485486787890450';

$nrkonta = $argv[1];

// . strlen($nrkonta) . "\n";

//echo count($nrkonta);

//exit;


//substr

//BEAta 2 , 2  => At
//1210504637562 2, 4  => 1050
//substr
function OwnSubstr($text, $start, $count)
{
	//DlugoscTextu dozwolone :)
}

echo OwnSubstr($nrkonta, 2, 4); // 

$j = 0;
for (;isset($argv[++$j]);)
{
	echo "\nDlugosc textu z argv: ";
	echo DlugoscTextu($argv[$j]);
	echo "\n";
}


function DlugoscTextu($text)
{
	for($i = 0; isset($text[$i]); $i++)
	{
	}
	
	return $i;
}


for($i = 0; isset($nrkonta[$i]); $i++)
{
}

echo "\nnasza Dlugosc textu: ";

echo $i;
echo "\n";



$dlugoscNrKonta = strlen($nrkonta);

if ($dlugoscNrKonta==26)
{
	echo 'nr jest ok :) ';
}
else 
{
	echo 'nr konta jest z³y';
}
//substr

$nbr = $nrkonta[2]. $nrkonta[3].$nrkonta[4].$nrkonta[5];

echo "\n" . $nbr . "\n";
//$nrkonta[2]//,[5]








echo "\n\nOLD \n\n";

$tablicaBank =array('12','1020','32161881');

$numer = $tablicaBank[1] ;

echo "$numer" ;

if ($numer==1020)
	echo "\n,\n" ;
	


{
	echo "ing" ;

}

//else

{
	if ($numer==1030)
	echo "pko";
    	
}

?>