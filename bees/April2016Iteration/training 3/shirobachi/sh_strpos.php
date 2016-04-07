<?php 

function sh_strlen($string)
{
	for($i=0; isset($string[$i]); $i++)
	{
		//tutaj nic nie trzeba wpisywac gdyz ilosc iteracji bedzie jednoczesnie iloscia indeksow w stringu.
	}
	return $i;
}

function sh_strpos($word, $cut)
{
	$found = '';
	$numnerStr = '';
	for ($i=0; $i<sh_strlen($word); $i++)
	{
		if($word[$i]==$cut[0])
		{
			for($j=0; j<sh_strlen($cut); $j++)
			{
				if($word[$i]!=$cut[$j])break;

				if($j==sh_strlen($cut)&&$word[$i]==$cut[$j])
				{
					$found=true;
					$numnerStr=$i;
					break;
				}
				$j++;
			}
		}	
	}

	if($found!=true)
	{
		echo 'Nie ma '.$cut.' w slowie: '.$word;//nie wiem jak przekazac returnem kilka zmiennych dlatego uzylem echo.
	}
	else 
	{
		echo 'Jest '.$cut.' w slowie: '.$word.' na '.$i.' miejscu';
	}
}

sh_strpos("gimbus","bus");



