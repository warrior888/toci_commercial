<?php

function CzyTakieSamo ($text1, $text2)
{
	if (strlen ($text1) == strlen ($text2))
	{
		echo "$text1" . "i" . "$text2" . " maja tyle samo znakow";
	}
	else
	{
		echo "$text1" . " i " . "$text2" . " NIE maja tyle samo znakow";
	}
}

CzyTakieSamo ("ALA MA KOTA", "ALA MA KOTA")

?>