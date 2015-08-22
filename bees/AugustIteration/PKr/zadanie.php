<?php 

// Zadanie domowe nr 1. Wypisanie ocen od 1-6.
 	$ocena = 1;
	if($ocena > 6 || $ocena < 1 )	
	{
		echo 'Nie ma takiej oceny !!';
	} 
	else 
	{
		if ($ocena == 1) 
		{
			echo 'Jeden';
	    }	
		elseif ($ocena == 2)
		{
			echo 'Dwa';
		}	
		elseif ($ocena == 3)
		{
			echo 'Trzy';
		}
		elseif ($ocena == 4)
		{
			echo 'Cztery';
		}
		elseif ($ocena == 5)
		{
			echo 'Piec';
		}
		elseif ($ocena == 6)
		{
			echo 'Szesc';
		}
	}	