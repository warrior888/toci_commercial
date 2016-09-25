<?php
//1
//$account = marcingalinskiGetBankName("1010104839252734584734");
//echo $account . "\n";

//2
//$accountFormat = marcingalinskiFormatAccountNumber("1010104839252734584734");
//echo $accountFormat . "\n";

//3
//marcingalinskiGetMoneyValue(123);

function marcingalinskiGetBankName($bankAccountNumber)
{
	// wyciac znaczki od 2 do 6 10 1020 435234
	$bank = "";
	for( $i = 2 ; $i < 6 ; $i++)
	{
		$bank .= $bankAccountNumber[$i];
	}

	$tab = array( "1010" => "Narodowy Bank Polski" ,"1020" => "PKO BP" , "1030" => "Citibank Handlowy ");

	return $tab[$bank];
}
//************************************************************************
function marcingalinskiFormatAccountNumber($bankAccountNumber)
{
	$tab = array("" , "", "" , "" , "" , "");
	//1010204839252734584734
	// => 10 1020 4839 2527 3458 4734
	$flag = 0;
	$wynik = "";
	for( $i = 0 ; $i < 6 ; $i++ )
	{
		for($j = $flag ; $j < strlen($bankAccountNumber) ; $j++ )
		{
			$tab[$i] .= $bankAccountNumber[$j];
			if( $j == 1 || $j == 5 || $j == 9 || $j == 13 || $j == 17 )
			{
				$flag = $j+1;
				break;
			}
		}
		$wynik .= $tab[$i];
		$wynik .= " ";
	}
	return $wynik;
}
//************************************************************************
function marcingalinskiGetMoneyValue($value) // *
{
	// 123 456 123
	// sto dwadziescia trzy miliony cztwerysta piecdziesiat szesc tysiecy sto dwadziescxia trzy

	$jednosci = array("","jeden ","dwa ","trzy ","cztery ","piec ","szesc ","siedem ","osiem ","dziewiec ");
	$nastki = array("","dziesiec ","jedenascie ","dwanascie ","trzynascie ","czternascie ","pietnascie ","szesnascie ","siedemnascie ",
			"osiemnascie ","dziewietnascie ");
	$dziesiatki = array("","dziesiec ","dwadziescia ","trzydziesci ","czterdziesci ","piecdziesiat ","szescdziesiat ","siedemndziesiat ",
			"osiemdziesiat ","dziewiecdziesiat ");
	$setki = array("","sto ","dwiescie ","trzysta ","czterysta ","piecset ","szescset ","siedemset ","osiemset ","dziewiecset ");

	$tysiace = array();

}
?>