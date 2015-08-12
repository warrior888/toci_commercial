
<?php
//zad 3
$NrKontaBankowego='12345678998765432123456786'."\n";

for ($i= 0; $i < strlen($NrKontaBankowego);$i++)
{
	ZmienLiczbeNaText($NrKontaBankowego[$i]) && Zamiana ($NrKontaBankowego[$i]);
}

function ZmienLiczbeNaText($NrKontaBankowego)
{
	$tab =array (1 => '32', 2=>'34', 3=> '44',4=>'55',5=>'71',6=>'87',7=>'49',8=>'54',9=>'34');
	
	echo $tab[$NrKontaBankowego]; //miksuje nr konta bankowego
}



//zad 4
function Zamiana($NrKontaBankowego)
{
	$tab =array (1 => '32', 2=>'34', 3=> '44',4=>'55',5=>'71',6=>'87',7=>'49',8=>'54',9=>'34');
	$tablica = array_flip($tab);
	
	//echo $tablica[$NrKontaBankowego]; //powinno odmixować
}

ZmienLiczbeNaText($NrKontaBankowego);
Zamiana($NrKontaBankowego);