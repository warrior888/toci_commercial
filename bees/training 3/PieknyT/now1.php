<?php


function Extractuj($tresc, $skok)
{
	//petla dl tresc o skok
	
	$tablica = ['kwiatek' => 3,
				'auto' => 4,
				'domek' => 6,
	
	           ];
	 
	foreach ($tablica as $klucz => $element) {
	
		if ($klucz == $skok)
		{
			$dlSlowa =   strlen($tresc);
			$i = $element-1;
				
			for ($i ; $i < $dlSlowa; $i+=$element)
			{
				return $tresc[$i]."\n";
			}
		}
	
	}
	
}

Extractuj('vbvrhbefvwdcverfgvtrbrtbewvefvev', 'kwiatek');