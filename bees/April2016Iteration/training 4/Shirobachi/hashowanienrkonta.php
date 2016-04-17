<?php

function hashon($nr)
{
	$litery = array('q','w','e','r','t','y','u','i','o','p','a','s','d','f','g','h','j','k','l','z','x','c','v','b','n','m');//25
	for($i=0; $i<rand(25, 250); $i++)
	{
		$nr[rand(0, strlen($nr-1))] .= $litery[rand(0, 25)];		
	}
	
	return $nr;
}

function hashoff()
{
	return 0;
}

$text = '1516534134683163';

echo $text . "\n";
hashon($text);

echo $text . "\n";
echo $text . "\n";