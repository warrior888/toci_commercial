<?php

	function FindElementInTable($table, $element) // 'a' => 'wartosc', 'b' => 'wartosc', 'c' => 'wartosc dla c', 3 wynikiem wartosc dla c 
	{
		$i = 1;
		foreach ($table as $key => $value)
		{
			//echo $key . " => " . $value . "\n";
			if ($element == $i)
			{
				return $value;
			}
			$i++;
		}
		// if $i == $element 
		
		
	}
	
	//echo FindElementInTable(array('a' => 1, 'b' => 1.5, 'c' => 2.5, 'd' => 6), 2);
	
	function OwnSubString($text, $start, $length) // text, 1, 2 => ex; beatka , 2 , 2 => at
	{
		//echo $text[$start];
		//echo $text[$start+1];
		//echo $text[$start+2];
		$result = "";
		
		for($i = $start; $i < $start + $length; $i++)
		{
			//echo 'idzie' . "\n";
			if ($i >= $start  && $i < $start + $length)
			{
				//echo $text[$i] . ' ' .$start . ' i: ' . $i . " s + l :  ".($start + $length). "\n";
			}

			$result .= $text[$i];
		}
		
		return $result;
	}
	
	//OwnSubString('bartlomiej', 2, 6);
	
	function OwnStrrev($text) // strrev kajak => kajak, beatka => aktaeb
	{
		for ($i = strlen($text) - 1; $i >= 0; $i--)
		{
			echo $text[$i];
		}
	}
	
	//echo OwnStrrev('kajaka');
	
	function LetterPosition($text, $letter) // beatka, e => 1, beatka , a => 2
	{
		for($i = 0; $i < strlen($text); $i++)
		{
			echo "czy i: " . $i . " text [i] " . $text[$i] . ' == ' . $letter . "\n";
			if ($text[$i] == $letter)
			{
				//return 
				echo "!!!!!!!!!!!! " .$text[$i] . " !!!!!!!! " .$letter . "\n";
				return $text[$i+1];
			}
		}
	}
	
	//echo LetterPosition('beatka', 't');
	
	function CountLetters($string)
	{
		// beatka => array ('b' => 1, 'e' => 1, 'a' => 2, 't' => 1, 'k' => 1)
		// text => array('t' => 2, ...)
		
		$result = array(); // tab asoc ['b'] => 1
		
		for($i = 0; $i < strlen($string); $i++)
		{
			//echo $result[$string[$i]] . "\n";
			if (isset($result[$string[$i]]))
			{
				
				$result[$string[$i]]++;
			}
			else 
			{
				
				$result[$string[$i]] = 1;
			}
		}
		
		var_dump($result);
	}
	
	//CountLetters('bbbartek');
	
	function StringPosition($text, $needle) // beatka, tk => 3; beatka , fds, => -1
	{
		for($i = 0; $i < strlen($text); $i++)
		{
			$str = OwnSubString($text, $i, strlen($needle));
			if ($str == $needle)
			{
				return $i;
			}
			//echo "i: " . $i .", " . $str . " strlen(needle): ".strlen($needle)." \n";
		}
	}
	
	//echo StringPosition('beatka', 'tk');
	
	function StringReplace($text, $needle, $replace) // str_replace : beata, ta, tka => beatka
	{
		for (;strpos($text, $needle) !== false;)
		{
			$pos = strpos($text, $needle);
			//var_dump($pos);
			//var_dump($text);
			$length = strlen($needle);
		
			//var_dump(substr($text, 0, $pos) );
			//var_dump(substr($text, $pos + $length));
			$text = substr($text, 0, $pos) . $replace . substr($text, $pos + $length);
		}
		
		return $text;
	}
	
	echo StringReplace('blefsdfdgbleble', 'ble', 'bla') . "\n";
	echo StringReplace('beata', 'ta', 'tka');