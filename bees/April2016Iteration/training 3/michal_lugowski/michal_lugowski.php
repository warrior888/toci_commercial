<?php 

//

/*
//strpos
function ml_strpos($string, $find)
{
	$stringlen = strlen($string);
	$found = '';
	$numStr = '';
	for ($i=0; $i<$stringlen; $i++)
	{
		if($string[$i]==$find[0])
		{
			$found=true;
			$numStr=$i;
			break;
		}	
	}

	if($found==true)
	{
		echo 'Znaleziono '.$find.' w slowie: '.$string.' w '.$i.' miejscu';
	} else {
		echo 'Nie znaleziono '.$find.' w slowie: '.$string;
	}
}
echo ml_strpos('lenovo', 'vo');

//strrev
function ml_strrev($slowo)
{
	$dlugosc=strlen($slowo);
	$odwSlowo='';	
	for($i=$dlugosc-1; $i>=0; $i--)
	{
		$odwSlowo.=$slowo[$i];
	}
	
	return $odwSlowo;
}

echo ml_strrev('lenovo');


//palidron
$slowo = 'sedes';
$spr = '';
$dlSlowa=strlen($slowo);

for($i=0; $i<=$dlSlowa-1; $i++)
{
	$spr.=$slowo[$i];
}

if($spr==$slowo){
	echo 'palidron';
} 
else
{
	echo 'nie palidron';
}


$wiek = 19;

if($wiek>=6 && $wiek<12)
{
	echo 'podstawowka';
}
else if($wiek >= 16 && $wiek < 19) 
{
	echo 'srednia';
} 
else if($wiek >= 19 && $wiek < 24) 
{
	echo 'studia';
} 
else 
{
	echo 'rodzina';
*/