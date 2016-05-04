<?php

function hashon($nr)
{
	$litery = array('q','w','e','r','t','y','u','i','o','p','a','s','d','f','g','h','j','k','l','z','x','c','v','b','n','m');//25 indexow 
	for($i=0; $i<rand(1000, 10000); $i++)
	{
		//$nr[rand(0, strlen($nr-1))] .= $litery[rand(0, 25)];		
		$nr = substr_replace($nr, $litery[rand(0, 25)], rand(0, strlen($nr)-1), 0);// to się nie wykonuje, ale dlaczego ?
	}//$nr[rand(0, strlen($nr)-1)]
	
	return $nr;
}

function hashoff($word)
{
	$number = '';
	
	for($i=0; $i<strlen($word); $i++)
	{
		switch($word[$i])
		{
			case"0":
				$number .=0;break;
			case'1':
				$number .=1;break;
			case'2':
				$number .=2;break;
			case'3':
				$number .=3;break;
			case'4':
				$number .=4;break;
			case'5':
				$number .=5;break;
			case'6':
				$number .=6;break;
			case'7':
				$number .=7;break;
			case'8':
				$number .=8;break;
			case'9':
				$number .=9;break;
			case' ':
				$number .=' ';break;
		}//switch
	}//for
	
	return $number;
}

$text = '76 1160 2202 0000 0002 9799 1972';

echo $text . "\n";

$text = hashon($text);
echo $text . "\n";

$text = hashoff($text);
echo $text . "\n";