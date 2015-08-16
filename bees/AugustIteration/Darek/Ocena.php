<?php
//zad1
$ocena = 3;
$zakresOccen = array (1=>'jeden', 2=>'dwa',3=> 'trzy',4=> 'cztery',5=> 'piec',6=> 'szesc');// do kazdej cyfry jest przypisana nazwa 
if ($ocena >0 && $ocena<7)
{
	echo $zakresOccen[$ocena];
}
else
{
	echo 'blad brachu'."\n";
}


//or ( tkzw spagetti)

if ($ocena==1)
{
	echo 'jeden';
}
elseif ($ocena==2)
{
	echo'dwa';
}
elseif ($ocena==3)
{
	echo 'trzy';
}
elseif ($ocena==4)
{
	echo 'cztery';
}
elseif ($ocena==5)
{
	echo 'piec';
}
elseif ($ocena==6)
{
	echo 'szesc';
}
elseif ($ocena <= 0  || $ocena > 7)
{
	echo 'brachu blad!';
}

echo "\n"."\n";

//zad 2
$text ='ala ma kota a kot ma grzyba';
		
for ($i = strlen($text);$i>=0; $i--)
{
	echo $text[$i];
}

