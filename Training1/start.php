<?php
//zadanie 2
$number = 12345678976113;

function cutToTriosTable($input)
{
	$amount = "$input";
	
	$lenght= strlen($amount);
	$i = $lenght-1;
	
	$triosTable = array();
	
	for ($i; $i>-1; $i-=3)
	{
		$triosTable[] = substr($amount, -3);
		$amount = substr($amount, 0, -3);
		
	}
	
	return $triosTable;
	
}


function fUnity($input)
{
	$unity = array('', 'jeden', 'dwa', 'trzy', 'cztery', 'piec', 'szesc', 'siedem', 'osiem', 'dziewiec');
	
	return isset($unity[$input]) ? $unity[$input] : '';
	
	foreach ($unity as $key => $value)
	{
		if ($key == $input)
		{
			return ($value);
		}
	}
	
}

function fDozens($input)
{
	if( $input[0]!= 1)
		{
		$dozens1= array('', '', 'dwadziescia', 'trzydziesci', 'czterdziesci', 'piedziesiat', 'szescdziesiat', 'siedemdziedziat', 'osiedziesiat', 'dziewiedziesiat' );	
		
			foreach ($dozens1 as $key => $value)
			{
				if ($key == (int) $input[0])
				{
					return $value." ".fUnity($input[1]);
				}
			}
		
		}
         else
	     {  
	        $dozens2 = array('dziesiec', 'jedenascie','dwanascie', 'trzynascie', 'czternascie', 'pietrnascie', 'szesnascie', 'siedemnascie', 'osiemnascie', 'dziewietnascie');
			
			foreach ($dozens2 as $key=>$value)
			{
				if($key == (int) $input[1])
				{
					return $value;
				}
				
				
			}
		  
		  
	     }
	
	
}

function fHundrets ($input)
{
	$hundrets = $hundreds = array('', 'sto', 'dwiescie', 'trzysta', 'czterysta', 'piecset', 'szescset', 'siedemset', 'osiemset', 'dziewiecset');
	
	foreach ($hundreds as $key => $value)
	{
		if ($key == (int) $input[0])
		{
			$input = substr($input,1,2);
			return $value." ".fDozens($input);
			
		}
	}
	
}


function rewriteTrio($input)
{
	if ($input[0]!=0)
	{
		return fHundrets($input);
		
		}
	else
	{
		if ($input[1]!=0)
		{
			return fDozens($input);
		}
		
		return fUnity($input);

	}
}


function rewriteAmount($input)
{
	$triosTable = cutToTriosTable($input);
	$amountElements = count($triosTable);
	
    $category = array('euro', 'tys', 'mln','mld','bln','bld','trln');
	$result=' ';
	
	
	
	for ($i=0; $i< ($amountElements-1); $i++)
	{
		if (($triosTable[$i] =="000"))
		{
			continue;
		
		}
		$result = rewriteTrio($triosTable[$i])." ".$category[$i]." ".$result;
		
	}
	
	$result = rewriteAlarm($triosTable[$amountElements-1])." ".$category[$amountElements-1]." ".$result;
	
	
	 return $result;
}



function rewriteAlarm($input)
{
	$lenght = (int) strlen($input);
	
	if ($lenght== 3)
	{
		return fHundrets($input);
		
	}
	if ($lenght== 2)
	{
		return fDozens($input);
		
	}
	if ($lenght== 1)
	{
		return fUnity($input);
		
	}
		
	
}




echo  rewriteAmount('1301450000456');


//$a = '3';
//echo fHundrets($a);
//echo fUnity('5');

//var_dump( cutToTriosTable($number));





?>