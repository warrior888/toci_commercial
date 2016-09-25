<?php

//strict
	//arrayintersectassoc
	
	function OwnArrayIntersectAssoc(array $firstArray, $secondArray)
	{
		$result = array();
		
		foreach ($firstArray as $key => $value)
		{
			if (isset($secondArray[$key]))
			{
				$result[$key] = $value;
			}
		}
		
		return $result;
	}
	
	function BetterOWnArrayIntersectAssoc(array $firstArray, $secondArray)
	{
		$params = func_get_args();
		//var_dump($params);
		
		$result = array();
		foreach ($params as $array)
		{
			if (is_array($array))
			{
				foreach ($array as $key => $value)
				{
					if (ArrayKeyExists($params, $key))
					{
						$result[$key] = $array[$key];
					}
				}
			}
		}
		
		return $result;
	}
	
	function ArrayKeyExists($params, $key)
	{
		$exists = false;
		foreach ($params as $param)
		{
			//var_dump($param);
			if (is_array($param))
			{
				if(isset($param[$key]))
				{
					$exists = true;
				}
				else 
				{
					$exists = false;
					break;
				}
			}
		}
		
		return $exists;
	}
	
	$result = BetterOWnArrayIntersectAssoc(
		'string',
		array('1010' => 'NBP', '1020' => '', '1440' => 'Nordea'),
		array('1010' => 'NBP', '1030' => '', '1440' => 'Nordea'),
		array('1010' => 'NBP', '1040' => '', '1440' => 'Nordea'),
		'ala ma kota'
	);
	
	var_dump($result);
	
	function Test($string)
	{
		foreach($string as $letter)
		{
			var_dump($letter);
		}
	}
	
	//Test('kot ma aids');