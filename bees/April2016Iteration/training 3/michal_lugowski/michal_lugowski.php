<?php 

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

?>
