<?php

function sh_strlen($string)
{
	for($i=0; isset($string[$i]); $i++)
	{
		//tutaj nic nie trzeba wpisywac gdyz ilosc iteracji bedzie jednoczesnie iloscia indeksow w stringu.
	}
	return $i;
}

	$myword = "Ja przepraszam bardzo, ale jak mozna nie wiedziec co to jest 'zapytaj beczke' ?";
	
	echo "Dlugosc indexow zmiennej myword: " .  sh_strlen($myword);