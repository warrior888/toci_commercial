<?php 

function ml_strrev($slowo)
{
	$dlugosc=strlen($slowo);
	$slowo2='';	
	for($i=$dlugosc-1; $i>=0; $i--)
	{
		$slowo2.=$slowo[$i];
	}
	
	return $slowo2;
}

echo ml_strrev('lenovo');

?>