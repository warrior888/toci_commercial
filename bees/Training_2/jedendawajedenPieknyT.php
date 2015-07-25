<?php


$liczbaDoPrzepisania = "13246433";

echo 'Dludosc slowa: '.strlen($liczbaDoPrzepisania). "<br>";
echo $liczbaDoPrzepisania. "<br>";

for ($i = 0; $i < strlen($liczbaDoPrzepisania);$i++)
{  
	
	if( $liczbaDoPrzepisania[$i]==1)
	{
		echo 'jeden'."\n";
	}
	
	if ( $liczbaDoPrzepisania[$i]==2)
	{
		echo'dwa'."\n";
	}
	
	if ( $liczbaDoPrzepisania[$i]==3)
	{
		echo'trzy'."\n";
	}
	
	if ( $liczbaDoPrzepisania[$i]==4)
	{
		echo'cztery'."\n";
	}
	
	if ( $liczbaDoPrzepisania[$i]==5)
	{
		echo'piec'."\n";
	}
	
	if ( $liczbaDoPrzepisania[$i]==6)
	{
		echo'szesc'."\n";
	}
	
	if ( $liczbaDoPrzepisania[$i]==7)
	{
		echo'siedem'."\n";
	}
	
	if ( $liczbaDoPrzepisania[$i]==8)
	{
		echo'osiem'."\n";
	}
	
	if ( $liczbaDoPrzepisania[$i]==9)
	{
		echo'dziewiec'."\n";
	}
}



