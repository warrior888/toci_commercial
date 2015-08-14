<?php


function NumberExtractor($param)
{
	$output ="";

	for ($i=0; $i < strlen($param); $i++)
	{

		if( ctype_digit($param[$i]))
		{
			$output .=$param[$i];
		}
	}

	return (int) $output;

}

echo NumberExtractor("dafsd444dad777")."\n";

function coKtoras($text, $param)
{

	$parametry= array(
		'kwiatek'=> 3,
		'auto' => 4,
		'domek'=> 6
		);

	if(array_key_exists($param, $parametry))
	{
		$skok = $parametry[$param];
		
		if (strlen($text) >= $skok)
		{
			for( $i = ($skok -1); $i < strlen($text); $i+=$skok)
			{
				echo $text[$i];
			}
			echo "\n";
		}
		else
		{
			echo "text ".$text." jest za krótki aby iterowac co ".$skok." litere"."\n";
		}
	}
	else
	{
		echo "parametr nie zdefiniowany \n";
	}

	
}

coKtoras("abcdefghijklmnouprstuvwxyz", "kwiatek");
coKtoras("abcdefghijklmnouprstuvwxyz", "auto");
coKtoras("abcdefghijklmnouprstuvwxyz", "domek");
coKtoras("abcdefghijklmnouprstuvwxyz", "edek");