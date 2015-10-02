<?php

	function Factorial($a)
	{
		if($a < 1)
		{
			return 1;
		}
		
		return $a * Factorial($a - 1);
	}

	echo "This is factorial ";
	echo Factorial(8);
	
	echo "<br>";
	
	function Involution($p,$q)
	{
		if($q==0)
		{
			return 1;
		}
		
		return Involution($p,$q-1)*$p;
	}
	
	echo "This is involution ";
	echo Involution(8,3);
	
?>