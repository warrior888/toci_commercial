<?php

    $numerKonta = "1010201312312312";
    $bankCode = substr($numerKonta, 2, 4);
    $bankID = array("1020" => "ING", "1030" => "PKO");
    
   //echo $bankCode;
//funkcja
	function ZwrocBank($bankCode, $bankID) {

		if (isset($bankID[$bankCode])) // 1050 => false
		{
             // echo $bankID[$bankCode];
			return $bankID[$bankCode];
          
		}
		else {
			return null;
		}

	}

	echo ZwrocBank(1020, $bankID);
