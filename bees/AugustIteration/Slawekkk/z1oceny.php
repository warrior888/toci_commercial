<?php
	
	$ocena = 6;

	if ($ocena > 6 || $ocena < 1) // warunek dla oceny wieksza od 6 mniejsza od 1 - BLAD
	{
		echo 'Ocena  niepoprawna';
	}
	else 
	{
		echo 'Ocena to ';
		
		if ($ocena == 1)
		{
			echo 'jedyneczka';
		}
		if ($ocena == 2)
		{
			echo 'dwoja';
		}
		if ($ocena == 3)
		{
			echo 'trojeczka';
		}
		if ($ocena == 4)
		{
			echo 'czworka';
		}
		if ($ocena == 5)
		{
			echo 'piatka';
		}
		if ($ocena == 6)
		{
			echo 'szostka';
		}
		
	}