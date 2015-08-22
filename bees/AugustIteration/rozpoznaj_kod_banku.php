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

	echo ZwrocBank($bankCode);

?>
