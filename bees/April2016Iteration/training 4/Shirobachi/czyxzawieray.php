<?php

$word1 = 'szczegolnosc';
$word2 ='osc';
$trafienia = 0;

function str_is($word1, $word2)
{
	for($i=o; $i<strlen($word1); $i++)
	{
		if($word1[$i]==$word2[0])
		{
			for($j=1; $j<strlen($word2); $j++)
			{
				if($word1[$i]!=$word2[$j])break;
				else if($word1[$i]==$word2[$j]&&$j==strlen($word2))
				{
					$trafienia++;
					break;					
				}
			}
		}
	}
	
	
}

str_is($word1, $word2);
echo "osc wystapilo $trafienia razy!";