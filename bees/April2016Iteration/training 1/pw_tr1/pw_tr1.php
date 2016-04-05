<?php
	$wiek = 15;
	
	if($wiek >= 9 && $wiek < 12)
	{
		echo'podstawowka';
	}
	elseif($wiek >= 12 && $wiek < 15)
	{
		echo 'gimnazjum';
	}
	elseif($wiek >= 15 && $wiek < 19)
	{
		echo 'srednia';
	}
	elseif($wiek < 9)
	{
		echo 'dziecko';
	}
	else 
	{
		echo 'radz sobie sam';
	}