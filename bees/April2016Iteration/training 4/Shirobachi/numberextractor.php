<?php

function NumberExtractor($word)
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
		}//switch
	}//for
	
	return $number;
	
}//fun

	$text = 'ashgdj2b3hb3b23j2b3hg23gj5gk3jhb6g578f6fgfd';



echo "Przed: $text \nPo: ".NumberExtractor($text);