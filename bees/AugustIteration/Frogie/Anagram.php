<?php
$wyraz1= $argv[1];
$wyraz2= $argv[2];
$tablicaWyraz1 = array ($wyraz1);
$tablicaWyraz2 = array ($wyraz2);

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

 IloscLiterWWyrazie($wyraz1);
function IloscLiterWWyrazie($wyraz)
{
	$zgodnosc = array();
	$dlugoscSlowa1 = SprawdzDlugoscSlowa($wyraz);
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
	