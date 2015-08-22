<?php
//Zmienne
	$numerKonta = "12" .$bankCode ."321618181";

	$bankCode = "1030";
	$bankID = array("1020" => "ING", "1030" => "PKO"); // 1050
	$error = "bledny kod banku";
//funkcja
	function ZwrocBank() {

		if ($bankCode == $bankID[1020])
		{
<<<<<<< HEAD
			echo $bankID[1020];
		}
		elseif ($bankCode == $bankID[1030]) {
			echo $bankID[1030];
		}
		else {
			echo $error;
=======
			echo  $bankID[1020];
		}
		elseif ($bankCode == $bankID[1030]) {
			echo  $bankID[1030];
		}
		else {
			echo  $error;
>>>>>>> bf0087560fb78387f94ef00729739e10659cc83c
		}
	}

//Funkcja lepiej

function ZwrocBankLepiej() {

	if ($bankCode == $bankID[$bankCode])
	{
		echo $bankID[$bankCode];
	}
	elseif ($bankCode == $bankID[$bankCode]) {
		echo $bankID[$bankCode];
	}
	else {
		echo $error;
	}
}

//Funkcja Najlepiej

	function ZwrocBankNajlepiej($kod) {

		if ($bankCode == $bankID[$kod])
		{
			echo $bankID[$kod];
		}
		elseif ($bankCode == $bankID[$kod]) {
			echo $bankID[$kod];
		}
		else {
			echo $error;
		}
	}

	echo ZwrocBank();

	echo ZwrocBankLepiej();

	echo ZwrocBankNajlepiej($bankCode);

?>
