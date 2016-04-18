<?php

function hashon($nr)
{
	$litery = array('q','w','e','r','t','y','u','i','o','p','a','s','d','f','g','h','j','k','l','z','x','c','v','b','n','m');//25 indexow 
	for($i=0; $i<rand(25, 250); $i++)
	{
		//$nr[rand(0, strlen($nr-1))] .= $litery[rand(0, 25)];		
		$nr = substr_replace($nr, $litery[rand(0, 25)], rand(0, strlen($nr)-1), 0);// to się nie wykonuje, ale dlaczego ?
	}//$nr[rand(0, strlen($nr)-1)]
	
	return $nr;
}

function hashoff()
{
	return 0;
}

$text = '76 1160 2202 0000 0002 9799 1972';

echo $text . "\n";
hashon($text);

echo $text . "\n";