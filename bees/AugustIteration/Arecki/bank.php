<?php

    $numerKonta = "1010201312312312";
    $bankCode = substr($numerKonta, 2, 4);
    $bankID = array("1020" => "ING", "1030" => "PKO");
    
   echo $bankCode;
//funkcja
	function ZwrocBank($bankCode) {

		if (isset($bankID[$bankCode])) // 1050 => false
		{
			return $bankID[$bankCode];
            echo $bankID[$bankCode];
		}
		else {
			return null;
		}

	}

	echo ZwrocBank($bankCode);
/*
if ($bankCode == 1020) {
        echo 'ING';
   } else if ( $bankCode == 1030) {
        echo 'PKO';
   } else if ( $bankCode == 1040) {
        echo 'mBank';
   } else if ( $bankCode == 1050) {
        echo 'Alior';
   } else if ( $bankCode == 1060) {
        echo 'Spoldzielczy';
   }
*/