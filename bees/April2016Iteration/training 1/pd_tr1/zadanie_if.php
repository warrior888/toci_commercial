<?php

	$wiek = 70;

	if ($wiek >15 && $wiek < 21)
	{
		echo 'Szkola srednia';
	}
	
	else if ($wiek > 21 && $wiek < 25)
	{
		echo 'Studia';
	}
	
	else if($wiek > 25 && $wiek < 65)
	{
		echo 'Praca';
	}
	
	else if($wiek > 65)
	{
		echo 'Emerytura';
	}