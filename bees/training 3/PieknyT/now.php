<?php 

 

function NumberExtraktor ($slowo)
{ 
	$dlSlowa = (strlen($slowo)-1);
	for ($i = 0 ; $i < $dlSlowa; $i++)
	{
		if ( $slowo[$i] === '0' || (((int)$slowo[$i]) > 0 && ((int)$slowo[$i]) <10) ) // null === false
		{
			echo $slowo[$i];
		}
		
	}
		
}

NumberExtraktor('43kkk30004k332kdfsagrwgrhetjr999kk3kkk65kk87k');