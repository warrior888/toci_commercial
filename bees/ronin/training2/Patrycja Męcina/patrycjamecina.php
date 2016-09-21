<?php

/*
$i;
$liczba = "-44546";
$bankAccountNumber = "1010204839252734584735";


//echo "Twoj bank to : "  .GetBankName($bankAccountNumber);
//FormatAccountNumber($bankAccountNumber);
//NewFormatAccountNumber($bankAccountNumber);
GetMoneyValue($liczba); */






function GetBankName($bankAccountNumber)  // wyciac znaczki od 2 do 6 10 1020 435234
{
	$result="";
	
	for($i=2; $i<6; $i++)
	{
			$result.=$bankAccountNumber[$i];
		
	}
	//echo $result ."\n";
	//return $result;
	
	$tablica = array("1010"=>"Narodowy Bank Polski", "1020"=>"PKO BP" ,"1030"=>"Citibank Handlowy" ,"1040"=> "ING");
	
	return $tablica[$result];
}

function FormatAccountNumber($bankAccountNumber)   //1010204839252734584734    => 10 1020 4839 2527 3458 4734
{
	$spacje = "00";
	$spacje.=$bankAccountNumber;
	//echo $spacje . "\n";
	
	//echo $bankAccountNumber;
	
	$text = $spacje;
	$newtext = wordwrap($text,4 , " ", true);
	
	//echo $newtext. "\n";
	
	$numerkonta = substr($newtext,2,27);
	return $numerkonta;

}	


function NewFormatAccountNumber($bankAccountNumber) //drugi sposob sformatowania nr konta
{
	$newBankAccountNumber="";
	$FinalFormatNumber="";
	
	for($i=strlen($bankAccountNumber)-1; $i>=0; $i--)
	{
		$newBankAccountNumber.=$bankAccountNumber[$i];
	}
	
	//echo $newBankAccountNumber;
	
	$FormatNumber = wordwrap($newBankAccountNumber,4 , " ", true);
	
	//echo $FormatNumber;
	
	for($i=strlen($FormatNumber)-1; $i>=0; $i--)
	{
		$FinalFormatNumber.=$FormatNumber[$i];
	}
	
	return $FinalFormatNumber;
}




function GetMoneyValue($liczba) // *123 456 123 ->>>  sto dwadziescia trzy miliony cztwerysta piecdziesiat szesc tysiecy sto dwadziescxia trzy
{
	$separator = ' ';
	$jednosci = array('', ' jeden', ' dwa', ' trzy', ' cztery', ' piêæ', ' szeœæ', ' siedem', ' osiem', ' dziewiêæ');
	$nascie = array('', ' jedenaœcie', ' dwanaœcie', ' trzynaœcie', ' czternaœcie', ' piêtnaœcie', ' szesnaœcie', ' siedemnaœcie', ' osiemnaœcie', ' dziewietnaœcie');
	$dziesiatki = array('', ' dziesieæ', ' dwadzieœcia', ' trzydzieœci', ' czterdzieœci', ' piêædziesi¹t', ' szeœædziesi¹t', ' siedemdziesi¹t', ' osiemdziesi¹t', ' dziewiêædziesi¹t');
	$setki  = array('', ' sto', ' dwieœcie', ' trzysta', ' czterysta', ' piêæset', ' szeœæset', ' siedemset', ' osiemset', ' dziewiêæset');
	$grupy = array(
			array('' ,'' ,''),
			array(' tysi¹c' ,' tysi¹ce' ,' tysiêcy'),
			array(' milion' ,' miliony' ,' milionów'),
			array(' miliard',' miliardy',' miliardów'),
			array(' bilion' ,' biliony' ,' bilionów'),
			array(' biliard',' biliardy',' biliardów'),
			array(' trylion',' tryliony',' trylionów')
	);
	
	$wynik = ''; $znak = '';
	if ($liczba == 0)
		return 'zero';
		if ($liczba < 0) {
			$znak = 'minus';
			$liczba = -$liczba;
		}
		$g = 0;
		while ($liczba > 0) {
	
	
			$s = floor(($liczba % 1000)/100);
			$n = 0;
			$d = floor(($liczba % 100)/10);
			$j = floor($liczba % 10);
	
	
			if ($d == 1 && $j>0) {
				$n = $j;
				$d = $j = 0;
			}
	
			$k = 2;
			if ($j == 1 && $s+$d+$n == 0)
				$k = 0;
				if ($j == 2 || $j == 3 || $j == 4)
					$k = 1;
	
					if ($s+$d+$n+$j > 0)
						$wynik = $setki[$s].$dziesiatki[$d].$nascie[$n].$jednosci[$j].$grupy[$g][$k].$wynik;
	
						$g++;
						$liczba = floor($liczba/1000);
		}
		
		return $znak.$wynik;
		//echo  $znak.$wynik;
		
	}
	
