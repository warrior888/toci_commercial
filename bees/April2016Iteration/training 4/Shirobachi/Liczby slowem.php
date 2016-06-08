<?php
 
function wypiszcyfre($a)
{
	if($a == 1)
	{
		return 'jeden ';
	}
	else if($a == 2)
	{
		return 'dwa ';
	}
	else if($a == 3)
	{
		return 'trzy ';
	}
	else if($a == 4)
	{
		return 'cztery ';
	}
	else if($a == 5)
	{
		return 'piec ';
	}
	else if($a == 6)
	{
		return 'szesc ';
	}
	else if($a == 7)
	{
		return 'siedem ';
	}
	else if($a == 8)
	{
		return 'osiem ';
	}
	else if($a == 9)
	{
		return 'dziewiec ';
	}
	else if($a == 0)
	{
		return 'zero ';
	}
	else
	{
		return 'BLAD!!';
	}
}

function wypisz($a)
{
	$wynik = '';
	
	for($i=0; $i<strlen($a); $i++)
	{
		$wynik .= wypiszcyfre($a[$i]);
	}
	return $wynik;
}

echo 'slowami 1234567890 to: ' . wypisz("1234567890"). "\n\n";

/*
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
$slowo = 'zupelnie inne';*/