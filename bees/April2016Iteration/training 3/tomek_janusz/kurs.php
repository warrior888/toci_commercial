<?php
	/*
	$komunikat = 'Toci szkoli programistow!!!' ;
	$liczba = 6 % 2;
	$ocena = 4;
	echo "\n";
	//echo $liczba;
	echo "\n";
	
	if($ocena >6 || $ocena<1 )
	{
		echo 'zglupiales? Nie ma takiej oceny';
	}
	else 
	{
		echo 'taka ocena moze byc';
		if($ocena == 1)
		{
			echo 'JEDYNKA!!';
		}
	}
	
	echo "\n\n\n\n";
	
	for ($i = 0; $i<=8; $i+=4)
	{
		echo $i;
		echo "\n";
	}
	*/
	
/*	echo "\n\n";
	echo $textJakiKolwiek[2];
	echo "\n\n";
	
	for($i=0; isset($textJakiKolwiek[$i]);$i++) //isset- sprawdzenie jak dlugi jest tesk
	{
				echo $i;
				echo " w pentli \n\n";
	}
	echo "\nStrlnen mowi: ";
	echo strlen($textJakiKolwiek);
	
	for ($i =0 ;$i <strlen($textJakiKolwiek);$i++)
	{
		echo $textJakiKolwiek[$i];
		echo "\n";
	}
*/	
	$textJakiKolwiek = 'ala ma kota a kot ma ale';
	for ($i = strlen($textJakiKolwiek)-1; $i>=0; $i--)
	{
		echo $textJakiKolwiek[$i]; 
	}