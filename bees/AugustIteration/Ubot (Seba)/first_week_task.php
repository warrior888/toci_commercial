<?php
 //task 01

//Zmienne
$otrzymanaOcena = 3;

$zakresOcen = array ("1" => "Niedostateczna", "2" => "Dopuszczaj¹ca", "3" => "Dostateczna", "4" => "Dobra", "5" => "Bardzo Dobra", "6" => "Celuj¹ca");

// Macie jakiœ pomys³ jak zrobiæ tê tablicê tak, ¿eby przy wpisaniu 
// $otrzymanaOcena = "Niedostateczna" dzia³alo prawid³owo ?

$wypiszOcene = ("Otrzymana ocena: ");
$wiadomoscBleduZakresu = ("Wpisana ocena jest b³êdna, dopuszczalny zakres: " ."<br />");



//instrukcja

	if ($otrzymanaOcena < 7 && $otrzymanaOcena > 0)
	{
		echo ($wypiszOcene .$zakresOcen[$otrzymanaOcena]);
	}
	else {
		echo $wiadomoscBleduZakresu;

    $dopuszczalnyZakres = count ($zakresOcen);
        for ($i=1; $i <= $dopuszczalnyZakres ; $i++) {
          echo $zakresOcen[$i] . "<br />";
        }
  }

  ?>
		


