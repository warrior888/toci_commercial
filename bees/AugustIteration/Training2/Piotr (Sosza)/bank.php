<?php
//Zmienne
	$numerKonta = "121020321618181";
	$bankCode = substr ($numerKonta, 2, 4);
	$bankID = array("1020" => "ING", "1030" => "PKO"); // 1050

//funkcja
	function ZwrocBank($kod) {

		if (isset($bankID[$kod])) // 1050 => false
		{
			return $bankID[$kod];
		}
		else {
			return null;
		}

	}

		if ($bankCode == "1020")
		{
			echo "to jest ING";
		}
		elseif ($bankCode == "1030")
		{
			echo "to jest PKO";
		}
		else 
		{
		echo "nie jestem w stanie rozpoznac jaki to bank";
		}

?>
