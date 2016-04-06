<?php
	echo "\n";
	echo in_strrev("pomarancza");
	
	function in_strrev($text)
	{
		$odwroconyTekst = '';
		
		for($i = tj_strlen($text)-1; $i >= 0; $i--)
		{
			$odwroconyTekst .= $text[$i];
		}
		
		return $odwroconyTekst;
	}

	function tj_strlen($text)
	{
		for ($i = 0; isset($text[$i]); $i++)
		{
		}
		return $i;
	}
	echo "\n";