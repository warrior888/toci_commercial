<?php

function anagram($word1, $word2)
{
	$stringParts1 = str_split($word1);
	sort($stringParts1);
	
	$stringParts2 = str_split($word2);
	sort($stringParts2);
	
	if((implode('', $stringParts1))==(implode('', $stringParts2))) return "true";
	else return "false";
}

echo anagram("lisen","silen")." <== lisen, silen\n";
echo anagram("alisen","silen")." <==alisen, silen";