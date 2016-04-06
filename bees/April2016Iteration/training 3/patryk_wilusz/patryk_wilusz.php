<?php
	echo in_strrev("beata");
	
	function in_strrev($text)
	{
		$nowytekst = '';
		for($i = bz_strlen($text)-1; $i >= 0; $i--)
		{
			$nowytekst .= $text[$i];
		}
		
		return $nowytekst;
	}

	function bz_strlen($text)
	{
		for ($i = 0; isset($text[$i]); $i++)
		{
		}
		return $i;
	}