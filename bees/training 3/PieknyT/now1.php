<?php


function Extractuj($tresc, $skok)
{
	//petla dl tresc o skok
	
	$tablica = array('kwiatek' => 3,
				'auto' => 4,
				'domek' => 6,
	
	           );
	           
	        //$tablica['dsafasd'] = 4352;   
	 $wynik = '';
	           
	           
	foreach ($tablica as $klucz => $element) {
	
		if ($klucz == $skok)
		{
			$dlSlowa =   strlen($tresc);
			$i = $element-1;
				
			for ($i ; $i < $dlSlowa; $i+=$element)
			{
				$wynik = $wynik . $tresc[$i];
			}
		}
	
	}
	
	return $wynik;
}

$nastepnazmnienna = Extractuj('vbvrhbefvwdcverfgvtrbrtbewvefvev', 'kwiatek');





