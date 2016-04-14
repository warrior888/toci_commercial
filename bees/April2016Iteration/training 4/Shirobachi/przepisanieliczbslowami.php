<?php
//kopia

$liczbaDoPrzepisania = '4325';

echo 'Dlugosc slowa: '.strlen($liczbaDoPrzepisania)."\n";
$pelneSlowo = '';

$tab = array(1 => 'jeden', 2 => 'dwa', 3 => 'trzy', 4 => 'cztery', 5 => 'piec', 8 => 'osiem');

for ($i = 0; $i < strlen($liczbaDoPrzepisania); $i++)
{
	$pelneSlowo .= ZmienLiczbeNaText($tab, $liczbaDoPrzepisania[$i]);

	//echo '  ----------> ' . $liczbaDoPrzepisania[$i]. ' <-----------'."\n";
	
	//$liczbaDoPrzepisania[$i]
	
	/*if ($liczbaDoPrzepisania[$i] == 4)
	{
		echo 'cztery ';
	}
	
	if ($liczbaDoPrzepisania[$i] == 6)
	{
		echo 'szesc ';
	}
	
	if ($liczbaDoPrzepisania[$i] == 8)
	{
		echo 'osiem ';
	}*/
}

echo $pelneSlowo;
                         // 0 - 9   // para do slowa
function ZmienLiczbeNaText($tab, $liczba)
{
	
	
	//if ($liczba == $element)
	//{
		return $tab[$liczba]."\n";
	//}
}



///--------------------
       // 01234567890
$slowo = 'zupelnie inne';