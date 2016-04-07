<?php

function sh_strlen($string)
{
	for($i=0; isset($string[$i]); $i++)
	{
		//tutaj nic nie trzeba wpisywaæ gdy¿ iloœæ iteracji bêdzie jednoczesnie iloscia indeksow w stringu.
	}
	return $i;
}

	$myword = "Ja przepraszam bardzo, ale jak mo¿na nie wiedzieæ co to jest 'zapytaj beczke' ?";
	
	echo "Dlugosc indexow zmiennej myword: " .  sh_strlen($myword);