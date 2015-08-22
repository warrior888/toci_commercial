<?php

    $numerKonta = "1010201312312312";
    $bankCodeLol = substr($numerKonta, 2, 4);
    $bankLol = array("1020" => "ING", "1030" => "PKO");
    
   //echo $bankCode;
//funkcja
	function ZwrocBank($bankCode, $bankID) {

		if (is_array($bankID) && count($bankID) > 0)
		{
			echo 'jest ok';
		}
		else 
		{
			echo 'jest zle';
			return;
		}
		
		if (isset($bankID[$bankCode])) // 1050 => false
		{
			echo $bankID[$bankCode];
			return $bankID[$bankCode];
            
		}
		else {
			return null;
		}

	}

	echo ZwrocBank("1020", array(543634));
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