<?php

	function ZrobPrzelewy($listaPrzelewow)  // => 
	{
//		/echo 'OD: nazwa, DO: nazwa';
		
		$nazwaBanku = array (1020 => "ING", 1050 => "PKO");
		
		for ($i = 0; $i < count($listaPrzelewow); $i++)
		{
			//echo $listaPrzelewow[$i];
			$identyfikator = WytnijIdentyfikatorBanku($listaPrzelewow[$i]);
			
			echo $nazwaBanku[$identyfikator];
		}
	}
	
	function WytnijIdentyfikatorBanku($nrKonta)
	{
		return substr($nrKonta, 2, 4); // 1020
	}
	
	
	ZrobPrzelewy(
		array(
			array('od' => '1010204375628495634856494', 'do' => '101060784267406790'),
			array('od' => '1010204375628495634856494', 'do' => '101060784267406790'),
		)
	);