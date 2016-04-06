<?php
 //task 01

//Zmienne
$otrzymanaOcena = 8;

$zakresOcen = array ("1" => "Niedostateczna", "2" => "Dopuszczajaca", "3" => "Dostateczna", "4" => "Dobra", "5" => "Bardzo Dobra", "6" => "Celujaca");

//Macie jakis pomysł jak zrobić tablice, by bez wzgledu na to czy wpiszemy 1 czy Niedostateczna wyswietlalo poprawnie wynik?

$wypiszOcene = ("Otrzymana ocena: ");
$wiadomoscBleduZakresu = ("Wpisana ocena jest błędna, dopuszczalny zakres: " ."<br />");

//funkcja
/*	else { // nie wiem jak tego elsa zamknąć w funkcję
		echo $wiadomoscBleduZakresu;

    $dopuszczalnyZakres = count ($zakresOcen);
        for ($i=1; $i <= $dopuszczalnyZakres ; $i++) {
          echo $zakresOcen[$i] . "<br />";
        }
  }
	*/


//instrukcja

	if ($otrzymanaOcena < 7 && $otrzymanaOcena > 0)
	{
		echo ($wypiszOcene .$zakresOcen[$otrzymanaOcena]);
	}
	else { // nie wiem jak tego elsa zamknąć w funkcję
		echo $wiadomoscBleduZakresu;

    $dopuszczalnyZakres = count ($zakresOcen);
        for ($i=1; $i <= $dopuszczalnyZakres ; $i++) {
          echo $zakresOcen[$i] . "<br />";
        }
  }

echo "<br /> <br />";

 //task01a
 	if ($otrzymanaOcena < 7 && $otrzymanaOcena > 0)
	{
		if ($otrzymanaOcena == 1)
		{
			echo $zakresOcen[1];
		}
		elseif ($otrzymanaOcena == 2) {
			echo $zakresOcen[2];
		}
		elseif ($otrzymanaOcena == 3) {
			echo $zakresOcen[3];
		}
		elseif ($otrzymanaOcena == 4) {
			echo $zakresOcen[4];
		}
		elseif ($otrzymanaOcena == 5) {
			echo $zakresOcen[4];
		}
		elseif ($otrzymanaOcena == 6) {
			echo $zakresOcen[6];
		}
	}
	else {
		echo $wiadomoscBleduZakresu;
		$dopuszczalnyZakres = count ($zakresOcen);
			for ($i=1; $i <= $dopuszczalnyZakres; $i++)
			{
				echo $zakresOcen[$i] ."<br />";
			}
	}


  ?>
