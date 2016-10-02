<?php

	function PassByReference (&$table, &$int)
	{
		$table[] = 'wpis';
		$table[] = 1;
		
		$int = 5;
	}
	
	$table = array('bartek' => 'zapart');
	
	PassByReference($table);
	
	var_dump($table);