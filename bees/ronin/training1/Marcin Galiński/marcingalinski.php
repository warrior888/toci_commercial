<?php
	
	
	/*
	//1
	
	$tab = array( 'a'=> 10 , 'b' => 50 , 'c' => 100 , 'd' =>30 , 'e' => 65 );
	$el = marcingalinskiFindElementInTable($tab, 'c');
	echo $el . "\n";
	
	//2
	$sub = marcingalinskiOwnSubString("beatka", 2, 2);
	echo $sub . "\n";
	
	//3
	$poz = marcingalinskiLetterPosition("beatka", 'e');
	echo $poz . "\n";
	
	//4
	$wynik = marcingalinskiCountLetters("text");
	echo $wynik['e'] . "\n";
	
	//5
	$strPoz = marcingalinskiStringPosition("beatka", "at");
	echo $strPoz . "\n";
	
	//6
	$result = marcingalinskiStringReplace("beata", "ta", "tka");
	echo $result . "\n";
	*/
	
	
	
	//1*******************************************************************************
	function marcingalinskiFindElementInTable($table, $element)
	{
		foreach( $table as $key => $value )
		{
			if( $key == $element )
			{
				return $table[$key];
			}
		}
	}
	
	//2*******************************************************************************
	function marcingalinskiOwnSubString($text, $start, $length)
	{
		$zm = "";
		for( $i = $start ; $i < ($start + $length) ; $i++ )
		{
			$zm .= $text[$i];
		}
		return $zm;
	}
	
	//3*******************************************************************************
	function marcingalinskiLetterPosition($text, $letter)
	{
		for( $i = 0 ; $i <= (strlen($text) - 1) ; $i++ )
		{
			if( $text[$i] == $letter )
			{
				return $i;
			}
		}
		return (-1);
	}
	
	//4*******************************************************************************
	function marcingalinskiCountLetters($string)
	{
		
		
		$tab = array();
		for( $i = 0 ; $i < strlen( $string ) ; $i++ )
		{
			@++$tab[($string[$i])];
		}
		
		return $tab;
	}
	
	//5*******************************************************************************
	function marcingalinskiStringPosition($text, $needle)
	{
		for( $i = 0 ; $i < (strlen($text)) ; $i++ )
		{
			$subString = marcingalinskiOwnSubString($text, $i , strlen($needle) );
			if( $subString == $needle )
			{
				return $i;
			}
		}
		return (-1);
	}
	
	//6*******************************************************************************
	function marcingalinskiStringReplace($text, $needle, $replace)
	{
		$poz = marcingalinskiStringPosition($text, $needle);
		for( $i = $poz ; $i < strlen($text) ; $i++ )
		{
			$text[$i] = "";
		}
		$text .= $replace;
		return $text;
	}
