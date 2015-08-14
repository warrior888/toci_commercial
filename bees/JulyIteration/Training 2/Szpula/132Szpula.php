<?php

		$liczbaDoPrzepisania = '132579';
		echo $liczbaDoPrzepisania;
		//echo 'Dlugosc slowa to:' . strlen($liczbaDoPrzepisania);
		
		for($i = 0; $i<strlen($liczbaDoPrzepisania); $i++)
		{
			if($i = 1)
			{
				echo " --------> jeden";
			}
			if($i = 2)
			{
				echo " trzy";
			}
			if($i = 3)
			{
				echo " dwa";
			}
			if($i = 4)
			{
				echo " piec";
			}
			if($i = 5)
			{
				echo " siedem";
			}
			if($i = 6)
			{
				echo " dziewiec";
			}
		}

?>