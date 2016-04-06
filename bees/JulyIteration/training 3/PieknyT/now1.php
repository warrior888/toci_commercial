<?php


function Extrachuj($tresc, $skok)
{
	
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
				echo $tresc[$i]."\n";
			}
		}
	
	}
	
}

 Extrachuj('vbvrhbefvwdcverfgvtrbrtbewvefvev','auto');