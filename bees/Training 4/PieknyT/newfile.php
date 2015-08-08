<?php

class druga extends pierwsza
{
	function zamienMiejscami($numerKonta)
	{
		$wynik ='';

		for ($i = 0; isset($numerKonta[$i]); )
		{
			$wynik.= $numerKonta[$i+1];
			$wynik.= $numerKonta[$i];
			$i+=2;
		}
		return $wynik;
	}

	function szyfr2a($numerKonta)

	{
		return	wstawSpacje(zamienMiejscami($numerKonta));
	}
}


$accountNumber ='01234567890123456789012345';
$istancjaJanusza = new druga($accountNumber);

echo ($istancjaJanusza);