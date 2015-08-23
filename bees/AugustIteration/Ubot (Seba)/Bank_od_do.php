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
array($od =>'121020543212345', $do =>'121050543212345'),
array($od =>'121020543212345', $do =>'121050543212345'),
array($od =>'121020543212345', $do =>'121050543212345'),
array($od =>'121070543212345', $do =>'121090543212345'),
);

$kodyBanku = array(1030 =>"ING", 1050 =>"PKO", 1020 => "Milenium", 1070 => "mbank", 1090 => "multibank");

znadzNrKonta($listaPrzelewow, $kodyBanku);

//Funkcje
function znadzNrKonta ($przelewy, $kodBanku){
	
	$od = "od";
	$do = "do";


	for ($i = 0; $i < count($przelewy); $i++) {

		$pojedynczyPrzelew = $przelewy[$i]; //array($od =>'121030543212345', $do =>'121050543212345')

		$wyciagnijKodOd = pobierzKodBanku($pojedynczyPrzelew[$od]); // 1030 //'121030543212345'
		$wyciagnijKodDo = pobierzKodBanku ($pojedynczyPrzelew[$do]); // `1050 // '121050543212345
		$przelewOd = $kodBanku[$wyciagnijKodOd]; // $wyciagnijKodOd[$kodBanku];
		$przelewDo = $kodBanku[$wyciagnijKodDo];

		echo "Przelew od " . $przelewOd . " , do " .$przelewDo."\n\n";

		}
}

function pobierzKodBanku ($nrKonta){
	return substr ($nrKonta, 2, 4);
};
?>
