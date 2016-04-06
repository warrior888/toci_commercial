<?php


 //dfefgedgd
	// Zmienne, typy zmiennych, funkcje, instrukcje + petle, blok kodu, operatory +-*/% =  ==  === != < > >= <= || &&    | &   ++ -- +=  -= *= /=  .
	
/*
	$komunikat = 'Toci szkoli programistow !!!';
	
	$liczba = 8;
	
	$liczba = $liczba / 2; // % 
	
	$ocena = 2; // 1 - 6

	echo $komunikat;
	
	echo $liczba;
	
	echo "\n\n\n\n";
	
	// przedmiot ocena uczen
	if ($ocena > 6 || $ocena < 1) // warunek warunki //jezeli
	{
		echo 'Drogi nauczycielu, nie ma takiej oceny !';
	}
	else 
	{
		echo 'Drogi nauczycielu, ocena istnieje !';
		
		if ($ocena == 1)
		{
			echo 'Jeden !!!!';
		}
		
		/// 1 zad domowe !
		
	}
	
	//for (inicjalizacja ; warunek zak; operacje po zakonczeniu kazdej petli)
	                // ==  === != < > >= <=
	for ($licznik = 0; $licznik <= 8; $licznik+=4) // 2, 0 4
	{
		echo $licznik;
		echo "\n";
	}
	
	*/
	
	// tablica [] operator indexowania isset kazdy text w php jest prost¹ tablic¹
	                 // 01234567890
	$textJakikolwiek = 'ala ma kota a kot ma psa a pies kosc'; // 11 ? 
	echo "\n\n";
		
	echo $textJakikolwiek[4];
	
	echo $textJakikolwiek[7];
	
	echo "\n\n";
	
	//strlen
	
	for ($i = 0; isset($textJakikolwiek[$i]); $i++)
	{
		echo $i;
		echo "  w petli \n\n";
	}
	
	
	
	echo "\nStrlnen mowi: ";
	
	echo strlen($textJakikolwiek);
	
	
	for ($i = 0; $i < strlen($textJakikolwiek); $i++)
	{
		echo $textJakikolwiek[$i];
		echo "\n";
	}
	//$i--
	
	// --