<?php

//Zmienne
$od = "od";
$do = "do";

$listaPrzelewow = array
(
array($od =>'121030543212345', $do =>'121050543212345'),
array($od =>'121050543212345', $do =>'121020543212345'),
array($od =>'121050543212345', $do =>'121030543212345'),
array($od =>'121030543212345', $do =>'121030543212345'),
array($od =>'121020543212345', $do =>'121050543212345'),
);

$kodBanku = array(1030 =>"ING", 1050 =>"PKO", 1020 => "Milenium");


//Funkcje
function znadzNrKonta ($przelewy){
	for ($i = 0; i < count($przelewy); $i++) {

		$pojedynczyPrzelew = $przelewy[$i];

		$wyciagnijKodOd = substr ($pojedynczyPrzelew[$od], 2, 4);
		$wyciagnijKodDo = substr ($pojedynczyPrzelew[$do], 2, 4);
		$przelewOd = $wyciagnijKodOd[$kodBanku];
		$przelewDo = $wyciagnijKodDo[$kodBanku];

		echo "Przelew od" . $przelewOd . " , do " .$przelewDo;

		}

//function zwrocBankiOdDo ($kod) {
//	$przelewWychodzacy = $
//
// 	if (wyciagnijKodOd[$kod] && wyciagnijKodDo == kodBanku[$kod])
// 	{
// 	 echo "Przelew z " .
 //	}
//}

function pobierzKodBanku ($nrKonta){
	return substr ($nrKonta, 2, 4);
};
//wykonaj kod

znajdzNrKonta($listaPrzelewow);

?>
