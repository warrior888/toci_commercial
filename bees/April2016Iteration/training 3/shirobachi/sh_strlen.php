<?php

function sh_strlen($string)
{
	for($i=0; isset($string[$i]); $i++)
	{
		//tutaj nic nie trzeba wpisywa� gdy� ilo�� iteracji b�dzie jednoczesnie iloscia indeksow w stringu.
	}
	return $i;
}

	$myword = "Ja przepraszam bardzo, ale jak mo�na nie wiedzie� co to jest 'zapytaj beczke' ?";
	
	echo "Dlugosc indexow zmiennej myword: " .  sh_strlen($myword);