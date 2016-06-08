<?php
/*
$word1 = 'szczegolnosc';
$word2 ='osc';
$trafienia = 0;

function str_is($word1, $word2)
{
	for($i=0; $i<strlen($word1); $i++)
	{
		if($word1[$i]==$word2[0])
		{
			for($j=1; $j<strlen($word2); $j++)//2<=
			{
				if($word1[$i]!=$word2[$j])break;
				else if($j=strlen($word2))
				{
					$trafienia++;
					break;					
				}
			}
		}
	}
	
	
}

str_is($word1, $word2);
echo "osc wystapilo $trafienia razy w slowie zczegolnosc!";
*/ 

//code repair by Patryk Wilusz! 
$word1 = 'szczegolnosc';
$word2 ='osc';
 
function str_is($word1, $word2)
{
    $trafienia = 0;
    for($i=0; $i < strlen($word1); $i++)
    {
        if($word1[$i] == $word2[0])
        {
            $k = $i + 1;
            for($j=1; $j < strlen($word2); $j++, $k++)
            {
                if($word1[$k] != $word2[$j]){
                    //echo $word1[$k]."!=".$word2[$j]."\n";
                    break;
                }//if
                else if($word1[$k] == $word2[$j] && $j == strlen($word2)-1)
                {
                    $trafienia++;
                    break;                 
                }//esle
            }//for
        }//if
    }//for
    return $trafienia;
}//fun
 
echo "osc wystapilo ".str_is($word1, $word2)." razy w słowie szczegolnosc!";