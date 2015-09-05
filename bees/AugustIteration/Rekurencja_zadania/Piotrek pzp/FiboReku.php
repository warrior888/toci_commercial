<?php

	function Fibonaci($sequenceNr)
	{
	
		// $sequenceNr = 0,1,2,3...n
			
		if($sequenceNr < 0) //error detection
		echo "error " ;
		
		// First method 
		
		/*if($sequenceNr == 0)
		{
			return 0;
		}
		else if($sequenceNr <= 2 )
		{
			return 1;
		}
		else if ($sequenceNr >= 3)
		{
			return Fibonaci($sequenceNr - 1) + Fibonaci($sequenceNr - 2); // Fn-1 + Fn-2
		}*/
		
		
		// Second method
		
		if ($sequenceNr < 2)
		{
			return $sequenceNr;
		}
		
		return Fibonaci($sequenceNr - 1) + Fibonaci($sequenceNr - 2); 
		
		
		
		
	}
	
	echo Fibonaci(9);
	
	//$test = Fibonaci(-1);
	
	//if($test)
	
	//echo " To found sequence ".$test;
	
	
	
?>