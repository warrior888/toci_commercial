<?php
/*
	
function NumberExtractor ($param)
{
	$liczby = array (0,1,2,3,4,5,6,7,8,9);
	
	for($i = 0; $i <= count ($array); $i++)
	{
		if (in_array( $array[$i], $liczby))
		{
			echo $array [$i];
		}
	}
}
*/
/*
$liczba = '23324sdfasd';

function WyciaganieLiczby ($par)

{
	for ($i = 0; $i < strlen ($liczba); $i++)
	{
		if ($liczba[$i] == 'string')
		{
			echo $liczba[$i];
		}
	}
	WyciaganieLiczby($par);
}
 $tresc = 'fnewuoghweuogbnwuogbnwerg';
	//$tablica =

	$slowo = 'kwiatek'; // auto domek costam wieza
		
	// kwai =&gt; 'hdusafhasduoghsduoghsduotywe'
	// auto =&gt; hfweughweuoghweuwghuoghweugweuk
	// domek =&gt; efuwotghrneruowhufhdughsdu
	
	// kw -&gt; 3
	 // auto -&gt; 4
	 // domek -&gt; 6
	 
	function Extractuj($tresc, $skok)
	{
		//petla dl tresc o skok
	}
*/
//echo NumberExtractor ("asdsadadafd423423424")."\n";

function costam( $text, $param)
{

	$parametry = array('kwiatek'=>3,'auto'=>4,'domek'=>6);
	if(array_key_exists($param, $parametry)) // isset ($parametry[$param])
	{
		$skok = $parametry[$param];
		
		if (strlen($text) >= $skok)
		{
			for ($i = ($skok-1); $i < strlen($text); $i+=$skok)
			{
				echo $text[$i];
			}
			echo "\n";
		}
		else
		{
			echo "text".$text."rozmiar za krotki".$skok."litere"."\n";
		}
	}
	else
	{
		echo "nie znaleziono\n";
	}
		
	
}
	costam("abcdefghijklmnoprstuvwxyz", "domek");
	costam("abcdefghijklmnoprstuvwxyz", "kwiatek");
	costam("abcdefghijklmnoprstuvwxyz", "auto");
?>