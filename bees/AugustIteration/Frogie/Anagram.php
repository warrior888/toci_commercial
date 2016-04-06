<?php
$wyraz1= $argv[1];
$wyraz2= $argv[2];
$liczba = 5;

function SprawdzDlugoscSlowa($slowo)
	{
		$dlugoscSlowa = strlen($slowo);
		return $dlugoscSlowa;
	}

If (SprawdzDlugoscSlowa($wyraz1) == SprawdzDlugoscSlowa($wyraz2))
	{
		echo "Wyraz ".$wyraz1." ma taka sama dlugosc co ".$wyraz2."\n";
	}
Else 
	{
		echo "Wyrazy".$wyraz1." i ".$wyraz2." nie s¹ Anagramami!\n";
		//exit();
	}
 echo $dlugoscSlowa = SprawdzDlugoscSlowa($wyraz1);

 //IloscLiterWWyrazie($wyraz1);
 ZWrocAsocacyjneLiterkiZIchiloscia($wyraz1);
 
 function ZWrocAsocacyjneLiterkiZIchiloscia($text)
 { 
 	$zgodnosc = array();
 	$dlugoscSlowa1 = SprawdzDlugoscSlowa($text);
 	for ($i=0 ; $i < $dlugoscSlowa1 ; $i++)
 	{
 		
 		if(isset($zgodnosc[$text[$i]]))
 		{
 			//echo "\n zgodnosc przed \n".$text[$i];
 			////beata
 			$zgodnosc[$text[$i]] = $zgodnosc[$text[$i]]+1;
 			//echo "\n zgodnosc po \n".$text[$i];
 		}
 		else 
 		{
 			$zgodnosc[$text[$i]] = 1;
 		}	
 	}
 	return $zgodnosc;
 }
  $test1 = ZWrocAsocacyjneLiterkiZIchiloscia($wyraz1);
 $test2 = ZWrocAsocacyjneLiterkiZIchiloscia($wyraz2);
 if(CzyTabliceSaRowne($test1,$test2))
 {
 	echo "Wyraz ".$wyraz1." jest anagramem z wyrazem ".$wyraz2."\n";
 }
 Else 
	{
		echo "Wyraz ".$wyraz1." NIE jest anagramem z wyrazem ".$wyraz2."\n";
 }
 function CzyTabliceSaRowne($tablica1, $tablica2)
 {
 	
						echo "\n\ntablica ";
						var_dump($tablica1);
						echo "\n";
						var_dump($tablica2);
 	foreach($tablica1 as $kluczAsocjacyjny=>$wartosc)
 	{
 		echo "\n\ntablica  ";
						var_dump($kluczAsocjacyjny);
						echo "\n";
						var_dump($wartosc);
						echo "\n";
 		
 			if(isset($tablica2[$kluczAsocjacyjny]) && $tablica2[$kluczAsocjacyjny]== $tablica1[$kluczAsocjacyjny])
 			{
 				
 				//return true;
 			}
 			else
 			{
 				//return false;
 			}
 		
 	}
 }
 exit;
 $test = ZWrocAsocacyjneLiterkiZIchiloscia($wyraz1);
 $test2 = ZWrocAsocacyjneLiterkiZIchiloscia($wyraz2);
 
 var_dump($test, $test2);
 //$test['a'] = 4;
 
if( $test ==  ZWrocAsocacyjneLiterkiZIchiloscia($wyraz2))
 {
 	echo "Wyraz ".$wyraz1." jest anagramem z wyrazem ".$wyraz2."\n";
 }
 Else 
	{
		echo "Wyraz ".$wyraz1." NIE jest anagramem z wyrazem ".$wyraz2."\n";
		//exit();
	}
 
 exit;
function IloscLiterWWyrazie($wyraz1)
{
	$zgodnosc = array();
	$dlugoscSlowa1 = SprawdzDlugoscSlowa($wyraz1);
	echo "toooooooooooo:\n".$dlugoscSlowa1."\n\n";
	
	for ($i=0 ; $i <= $dlugoscSlowa1 ; $i++)
			{
				for ($j=0 ; $j <= $dlugoscSlowa1 ; $j++)
				{
					if($tablicaWyraz1[$i] == $tablicaWyraz2[$j])
					{
						//$tablicaWyraz1 = 'sroka'
						//$i = 2
						
						$zgodnosc[$tablicaWyraz1[$i]] = 1;
						echo "\n\ntablica wyraz1 \n\n";
						var_dump($zgodnosc);
						echo "\n";
					}
					/*else 
					{
						return false;
						echo "Wyrazy".$wyraz1." i ".$wyraz2." nie s¹ Anagramami!";
						exit();	
					}*/
				}
				
			}	
}
	
	
/*$zgodnosc = array();


$tablicaWyraz1 = 'sroka';
$i = 2;*/
/*//$tablicaWyraz1[$i] = 1
//$zgodnosc[$tablicaWyraz1[$i]] = 1;//['o']=>int(1)
//$zgodnosc[$tablicaWyraz1[$i++]] = 1;//['k']=>int(1)
$zgodnosc[$tablicaWyraz1[$i++]] = 1;//['a']=>int(1)
$zgodnosc[$tablicaWyraz1[$i]] = 1;//[1]=>int(1)
$zgodnosc[$tablicaWyraz1[$i]] = 1;//['o']=>int(1)
$zgodnosc[1] = 'o';
$zgodnosc[] = $tablicaWyraz1[$i];*/

/*echo "\n\ntablica wyraz1 \n\n";
var_dump($zgodnosc);
echo "\n";*/
//array('o' => 1)


//exit;
	