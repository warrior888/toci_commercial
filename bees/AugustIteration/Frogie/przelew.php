<?php
/*$tablicaBank =array('12','1020','32161881');
$numer = $tablicaBank[1] ;
var_dump($numer);
echo "$numer";

	if ($numer==1020)
		{
			echo "\n,\n" ;
			echo "ing" ;
		}	
	else	
	    {
	    	if ($numer==1030)
	    	{
	    		echo "pko";
	    	} 	
	    }*/
   	
$bank1 = "12102032161881";
$bank2 = "12103032161881";
$bank3 = "12104032161881";
$bank4 = "12105032161881";

function WyciagnijCzteryZnaki1($nrKonta)
{
	$nrBanku = substr($nrKonta, 2, 4);
	return $nrBanku;
} 

/*echo WyciagnijCzteryZnaki2($bank1);
echo "\n";
echo WyciagnijCzteryZnaki2($bank3);
echo "\n";
*/
function WyciagnijCzteryZnaki2($nrKonta)
{
	$nrBanku = '';
	
	for($i=0; $i<strlen($nrKonta); $i++)
	{
		if($i>1 && $i<6)
		{
			echo "nr banku: ".$nrBanku."\n";
				$nrBanku .= $nrKonta[$i];// + $i; $nrBanku = $nrBanku.$nrKonta[$i];
		}
	}
	
	return $nrBanku;
}
//Beata i Wiktor frogisubstring('Beata i Wiktor',8, 6); Wiktor
//Beata i Wiktor frogisubstring('Beata i Wiktor',0, 5); Beata
/*echo frogisubstring('Beata i Wiktor',8, 6); 
echo frogisubstring('Beata i Wiktor',0, 5);
function frogisubstring($text, $punktStartowy, $iloscElementow)
{
	$wynik ='';
	echo "Puste: ".$wynik."\n";
for($i=0; $i<strlen($text); $i++)
	{
		if($i>$punktStartowy-1 && $i<$punktStartowy + $iloscElementow)
		{
			echo "Imie: ".$wynik."\n";
				$wynik .= $text[$i];// + $i; $nrBanku = $nrBanku.$nrKonta[$i];
		}
	}
	return $wynik;
}*/
echo "tu: \n";
echo frogisubstring2('Beata i Wiktor',8, 6); 
echo frogisubstring2('Beata i Wiktor',0, 5);
function frogisubstring2($text, $punktStartowy, $iloscElementow)
{
	$wynik ='';
	echo "Puste: ".$wynik."\n";
for($i=0; $i<strlen($text) && $i >$punktStartowy-1 && $i<$punktStartowy + $iloscElementow; $i++)
	{	
		echo "Imie: ".$wynik."\n";
		$wynik .= $text[$i];// + $i; $nrBanku = $nrBanku.$nrKonta[$i];	
	}
	return $wynik;
}
