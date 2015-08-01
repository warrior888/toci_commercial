<?php


function NumberExtractor($param)
{
	$output ="";

	for ($i=0; $i < strlen($param); $i++)
	{

		if( ctype_digit($param[$i]))
		{
			$output .=$param[$i];
		}
	}

	return (int) $output;

}

echo NumberExtractor("dafsd444dad777");