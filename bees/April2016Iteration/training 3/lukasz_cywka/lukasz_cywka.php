<?php


function lc_strlen($string)
{
    $dlugosc = 0;
    for($i = 0; isset($string[$i]); $i++ )
    {
        $dlugosc += 1;	
    }	
    return $dlugosc;
}

function lc_strrev($nazwa)
{
    $nazwa_odwrotna ='';
    $dlugosc = lc_strlen($nazwa);
    for($i=$dlugosc-1;$i >=0;$i--)
    {
         $nazwa_odwrotna .= $nazwa[$i];
    }
    return  $nazwa_odwrotna;
}

function lc_replace($string)
{
    $str = "";
    for($i=0; $i<lc_strlen($string); $i++)
    {
        if($string[$i] != " ")
        {
            $str .= $string[$i];
		}		
    }
		
    return $str;
}

function lc_palindrom($string)
{
    $string = lc_replace($string);
    $palindrom = '';
    for($i = lc_strlen($string) - 1; $i >= 0; $i--)
    {
        $palindrom .= $string[$i];
    }
    if($palindrom == $string)
    {
        return 'palindrom';
    }
    else 
    {
        return 'Niestety nie jest to palindrom';
    }
}
	

echo lc_palindrom('diabel zyl');
echo("<br>");
echo lc_strrev('Diabel zyl');
echo("<br>");
echo lc_replace('proba');

?>
