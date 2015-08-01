<?php 

 

function NumberExtraktor ($slowo)
{ 
	$dlSlowa = (strlen($slowo)-1);
	for ($i = 0 ; $i < $dlSlowa; $i++)
	{
		if ( ((int) $slowo[$i]) <10 )
		{
			echo $slowo[$i];
		}
		
	}
		
}

NumberExtraktor('43kkk30004k332k999kk3kkk65kk87k');