<?php



	//$beforPesel ="89031004773"; //"Pesel przed 2000";
	//$afterPesel = "Pesel po 2000";


	//$pesel = array(

	$beforPesel= array(
					"89031004773",
					"56062894773",
					"88110494783",
					"98050408473",
					"71120212653",
					"73122012408",
					"73130716630",
					"96192301020",
					"80030714131",
					"77180505390",
					"80020617006",
					"79040410704",
					"80030407147",
					"80062912806",
					"55042102582",
					"80012017384",
					"80030713925",
					"91020419284",
					"93011105363",
					"86071804628");
		/*$afterPesel =  array(
					"89031004773",
					"56062894773",
					"88110494783",
					"98050408473",
					"71120212653",
					"73122012408",
					"73100716630",
					"96092301020",
					"80030714131",
					"77080505390",
					"80020617006",
					"79040410704",
					"80030407147",
					"80062912806",
					"55042102582",
					"80012017384",
					"80030713925",
					"91020419284",
					"93011105363",
					"86071804628"));*/

	function CutDateWithPesel($pesel)
	{
		//$beforPesel = "Pesel przed 2000";
		//$afterPesel = "Pesel po 2000";
		return substr($pesel, 0, 6);

	//	for ($i=0;count($pesel);$i++)
	//	{
	//		echo $beforePesel[$i];

	//	}
	}

	function SeperateDateWithPesel($dateWithPesel)
	{

		$year = substr($dateWithPesel, 0, 2);
		$month = substr($dateWithPesel, 2, 2);
		$day = substr($dateWithPesel, 4, 2);


		//if (SprawdzDzien() && )



		return "Year: " . $year.", month: ".$month.", day: ".$day ."ciapki \n";
	}

		SeparteDateFromArrayPesel($beforPesel);
	// echo CutDateWithPesel($beforPesel);

	function SeparteDateFromArrayPesel ($array){
		foreach ($array as $key) {
			echo SeperateDateWithPesel($key);
		}
	}
	function czyPrzestepny($year)
	{
			return ($year % 4 == 0 && $year % 100 != 0 || $year % 400 == 0);
	}
	function CheckMileniumFromPesel ($month){
		switch (floor($month/20)) {
			case 0:
				return 0;
				break;
			case 1:
				return 1;
				break;
			case 2:
				return 2;
				break;
			case 3:
				return 3;
				break;
			case 4:
				return 4;
				break;
			default:
				return false;
				break;
		}
	}

	function CheckPESEL($str)
	{
		$arrSteps = array(1, 3, 7, 9, 1, 3, 7, 9, 1, 3); // tablica z odpowiednimi wagami
		$intSum = 0;
		for ($i = 0; $i < 10; $i++)
		{
			$intSum += $arrSteps[$i] * $str[$i]; //mnożymy każdy ze znaków przez wagć i sumujemy wszystko
		}
		$int = 10 - $intSum % 10; //obliczamy sumć kontrolną
		$intControlNr = ($int == 10)?0:$int;
		if ($intControlNr == $str[10]) //sprawdzamy czy taka sama suma kontrolna jest w ciągu
		{
			return true;
		}
		return false;
	}

?>
