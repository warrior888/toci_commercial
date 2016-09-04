<?php

	require_once 'common.php';
	
	$wyraz = 'bartlomiej';
	function zlicz ($text)
	{
		for($i=0; isset($text[$i]); $i++)
		{	
		}
		return $i;
	}
	//echo  zlicz($wyraz);
	function substring($wyraz, $strt, $dlugosc)
	{
		$wynik = null;
		for ($i=0; $i<zlicz($wyraz); $i++)
		{
			
			if($i >= $strt)
			{
				$wynik= $wynik.$wyraz[$i];
			}
			
			if($i == $strt + $dlugosc)
			{
				//echo "\n" . 'wunik równa sie '.$wynik;
				return $wynik;
			}
		}
	}
	//echo substring('beata i bartloemij', 2, 6);
	  
	function BeataReverse($text) // beata => ataeb, wiktor => rotkiw
	{
	  	$wynik = null;
	    echo "\n" . $text.'==>';
		for ($i = strlen($text)-1; $i>=0;$i--)//)
	  	{
	  		$wynik= $wynik.$text[$i];
	  		if($i==0)
	  		{
	  			return $wynik;
	  		}
	  	}
	}
	//echo BeataReverse('beata');
	
	function strange($text) // beata  => baeta bartlomiej bjaeritmlo
	{
		
		$wynik = null;
		for($i = 0,$j = strlen($text)-1;$i<=$j; $i++,$j--)
		{
			//$wynik= $wynik.$text[$i].$text[$j];
			if($i==$j)
			{
				$wynik= $wynik.$text[$i];
			}
			else 
			{
				$wynik= $wynik.$text[$i].$text[$j];
			}
			
		}
		return $wynik;
	}
	//echo strange('bartlomiej');
	//bettistrpos
	function betticount($text, $needle) // betti, e => 1, betti, t => 2 beatka,k => 4 
	{
		$wynik = null;
		for ($i=0;$i<=strlen($text)-1; $i++)
		{
			if($text[$i]==$needle)
			{
				$wynik = $wynik+1;
			}
		}
		return $wynik;
	}
	//echo betticount ('beattka', 't');
	
	function bettistrpos($text, $needle) // betti, e => 1, betti, t => 2 beatka,k => 4 
	{
		$wynik = null;
		for($i=0;$i<=strlen($text)-1; $i++)
		{
			if($text[$i]==$needle)
				{
					$wynik = $i;
					return $wynik;
				}
		}
		
	}
	//echo bettistrpos ('betti', 't');
	
	function letterreplace($text, $needle, $replace) // beata, b, p => peata; beata, t, k => beaka
	{
		$wynik = null;
		for($i=0;$i<= strlen($text)-1;$i++)
		{
			if($text[$i]== $needle)
			{
				$wynik = $wynik[$i].$replace;
				
			}
			else 
			{
				$wynik = $wynik.$text[$i];
			}	
		}
		return $wynik;
	}
	
	//echo letterreplace('beata', 'b', 'p');
		
	function b_str_replace($text, $needle, $replace)
	{
		$pos = strpos($text, $needle);
		$length = strlen($needle);
		
		return substr($text, 0, $pos) . $replace . substr($text, $pos + $length);
	}
	
	$testArray = array(
		array("beata", 'at', 'yogi'),
		array('bartek', 'te', 'ogi'),
		array('bartlomiej', 'mi', 'test'),
	);
	
	foreach ($testArray as $key => $value)
	{
		//echo "\n" . b_str_replace($value[0], $value[1], $value[2]);
	}
	
	function string_in_String($text, $needle)
	{
		//zwraca true jesli znajdzie text w texcie
		// beatka, atka => true; beatka, atke => false
		//$start = null;
		//substring($needle,$start, strlen($needle))
		$wynik = null;
		for($i=0; $i<= strlen($text)-1; $i++)
		{
			// beatka, beat == atka, i++, eatk == atka, i++ , atka == atka
			
			$wynik = substring($text,$i, strlen($needle));
				
			if($wynik == $needle)
			{
				return true;
			}
		}
	}
	
	function b_count_chars($text)
	{
		$wynik = array();
		for ($i=0;$i<=strlen($text);$i++)
		{
			
			for($j=0;$j<=strlen($text);$j++)
			{
				if($text[$i]==$text[$j])
				{
					//beatka
					$wynik[$text[$i]] = 1;
				}
			}
			
		}
		//$wynik[$text[$i]] = 1;
		
		//zwroc tablice asocjacyjn¹ dla beatka 'a' => 2, 'b' => 1, 'e' => 1 itd 
	}
	
	var_dump(b_count_chars('beatka'));
	
	function tablica()
	{
		//$tablica['a'] = 8;
		//$tablica['a'] = 1;
		$tablica = array();
		
		var_dump($tablica);
		
		if (!isset($tablica['a']))
		{
			$tablica['a'] = 1;
		}
		else 
		{
			$tablica['a']++;
		}
		//tablica asocjacyjna
		var_dump($tablica);
		
		$tab[0] = array('imie' => 'beatka');
		$tab[1] = array('imie' => 'beatka');
		
		var_dump($tab);
	}
	
	tablica();
	
	function podajDlugoscTablicy($tablica)
	{
		
	}
	
	function znajdzindexelementuwtablicy($tablica, $element)
	{
		
	}
	
	function betti_str_replace($text, $neeedle, $replace) // podmien string na string w stringu
	{ // beatka, tk, t => beata, bartlomiej, lomiej, ek => bartek
		
	}
	
/*	$length = frogie_strlen('przyklad');
	
	echo $length;
	
	$length = frogie_strlen('przyklad 2');
	
	echo $length;
	
	//$reverted  = frogie_strrev('beata');
	
	$tabTestStrRev = array(
		array('beata', 'ataeb'),
		array('beataa', 'aataeb'),
		array('wikunio', 'oinukiw'),
		array('zapart', 'trapaz'),
		array('zapart', 'guigiyygi'),
		array('gowno', 'onwog'),
	);
	
	foreach ($tabTestStrRev as $key => $unitTestVals)
	{
		if(frogie_strrev($unitTestVals[0]) == $unitTestVals[1])
		{
			echo "\n" . ' zgodnosc: ' . $unitTestVals[0] . ' i ' . $unitTestVals[1];
		}
		else 
		{
			echo "\n" . ' niezgodnosc: ' . $unitTestVals[0] . ' i ' . $unitTestVals[1];
		}
	}*/
	
	function palindrom($text)
	{
		for ($i=0,$j=strlen($text)-1; $i<strlen($text); $i++, $j--)
		{
			if ($text[$i]!= $text[$j])
			{
				return false;
			} 
				
		}
		
		return true;
	}
	$tabTestPalindrom = array('aa', 'radar', 'ala', 'cft');

	//foreach($tabTestPalindrom as $unitTestVals)
	//{
		//if(palindrom($unitTestVals))
		//{
		//	echo "\n".$unitTestVals." to palindrom.\n";
		//}
		//else
		//{
		//	echo "\n".$unitTestVals." to nie palindrom.\n";
		//}
	//}
	
	// beata, a - 2
	//beata, e - 1
	// beata , c - 0
	function policzliterkewtekscie($text, $literka)
	{
		$j=0;
		for($i=0; $i<strlen($text);$i++)
		{
			if($text[$i]== $literka)
			{
				$j=$j+1;
			}
		}
		
		return $j; 
	}
	
	//$wynik = policzliterkewtekscie("beata", "a");
	//echo "\nLitera a w s³owie beata znajduje siê ".$wynik." razy!\n";
	
	//
	//function policzliterkiwtekscie($text)
	//{
		
	//}
	//$slowo = frogie_substr("beate", 2, 3);
	//echo "\n".$slowo;
	
	
	//$wynik =podziel('Beata Zapart');
	//echo $wynik;
	
	/*$wynik = frogie_substr_count("beeaeata", "ea", 0);
	echo $wynik;
	$wynik = frogie_substr_count("beeata", "ea", 0);
	echo $wynik;
	$wynik = frogie_substr_count("beeaeaeata", "ea", 0);
	echo $wynik;*/