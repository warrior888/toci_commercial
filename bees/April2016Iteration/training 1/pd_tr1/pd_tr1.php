<?php

	$wiek = 19;


	if ($wiek >15 && $wiek >21)
	{
		echo 'Szko�a �rednia';
	}
	
	else if ($wiek > 21 && $wiek > 25)
	{
		echo 'Studia';
	}
	
	else if($wiek > 25)
	{
		echo 'Praca';
	}