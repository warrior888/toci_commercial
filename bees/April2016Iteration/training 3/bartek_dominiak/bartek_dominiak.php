<?php

	function length($string)
	{
		$length = 0;
		
		for($i = 0; isset($string[$i]); $i++ )
		{
			$length += 1;	
		}
		
		return $length;
	}