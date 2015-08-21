<?php

$ocena = 5;

if ($ocena >6 || $ocena < 1)
{
	echo 'Drogi nauczycielu, nie ma takiej oceny';
}

else
{
	echo 'Drogi nauczycielu, ocena istnieje!';
	
	if ($ocena==1)
	{
		echo 'Jeden';
	}
	
	if ($ocena==2)
	{
		echo 'Dwa';
	}
		
	if ($ocena==3)
	{
		echo 'trzy';
	}
		
	if ($ocena==4)
	{
		echo 'cztery';
	}
		
	if ($ocena==5)
	{
		echo 'piec';
	}
		
	if ($ocena==6)
	{
		echo 'szesc';
	}
}



