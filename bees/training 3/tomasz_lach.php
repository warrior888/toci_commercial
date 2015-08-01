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

echo NumberExtractor("dafsd447634805734869078495868934dsigs5757845734856fdshfgusdhvjlhsdjhvjosdhvwuoghwerughweru5825748574857485743uofrghughdkjghbskdjgsdjgh5627956275623479fdkhsg7564dad777")."\n";