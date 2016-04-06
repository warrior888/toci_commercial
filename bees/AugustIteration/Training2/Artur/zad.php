<?php
	
	// zad 1 sesja 2
	function PorownanieText($text1, $text2)
	{
		if (strlen($text1) === strlen($text2))
		{
			echo "\n" .'teksty sa rowne'."\n";
		}
		else
		{
			echo "\n" .'teksty sa nierowne'. "\n";
		}
	}
	
	echo PorownanieText('123456789', 'abcdefghi');