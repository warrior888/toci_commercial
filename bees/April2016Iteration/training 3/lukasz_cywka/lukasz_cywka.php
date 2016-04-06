<?php
function lc_strrev($nazwa)
{
    $dlugosc = strlen($nazwa);
    for($i=$dlugosc-1;$i >=0;$i--)
    {
        $nazwa1 .= $nazwa[$i];
    }
    return $nazwa1;
}
function lc_palindrom($string)
	{
        $palindrom = '';
        $dlugosc = strlen($string);
        $palindrom = lc_strrev($string);
    
		for($i = $dlugosc - 1; $i >= 0; $i--)
		{
			$palindrom .= $string[$i];
		}
		
		if($palindrom == $string)
		{
			return 'Palindrom';
		}
		else 
		{
			return 'Nie Palindrom';
		}
	}
	
	echo lc_palindrom('Text probny a co');
	
echo lc_strrev('text');
?>
