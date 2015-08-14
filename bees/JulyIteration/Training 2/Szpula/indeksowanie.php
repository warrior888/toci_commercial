<?php
		
		$slowo = 'ala ma kota i ma aids, a ja nie! :D';
	
		/*echo $slowo[10];
		echo $slowo[9];
		echo $slowo[8];
		echo $slowo[7];
		echo $slowo[6];
		echo $slowo[5];
		echo $slowo[4];
		echo $slowo[3];
		echo $slowo[2];
		echo $slowo[1];
		echo $slowo[0];*/
		
		for($i = strlen($slowo); $i >= 0; $i--)
		{
			echo $slowo[$i];
		}
		?>