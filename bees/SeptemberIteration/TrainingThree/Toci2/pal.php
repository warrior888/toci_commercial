<?php
function Palindrom ($slowo)
{
    $dlugosc = strlen($slowo);
		for ($i=0,$j=$dlugosc-1;$i<=$dlugosc-1,$j>=0;$i++,$j--)
			{
				if ($slowo[$i]===$slowo[$j])
				{
				return 'to jest palindrom'."\n";
				}
				else
				{
				return 'to nie jest palindrom'."\n";
				}
			}
}
echo Palindrom ('oko');

//Jakie były trudnosci:
//Pierwsza: zamiast dwoch forow napisac jeden
//Druga: przecinki , i sredniki ; w nawiasach
//Trzecia: traktowanie slowa jako tablicy i potrzeba dodania [] przy warunku if
//Czwarta: zapominanie ze dlugosc musi byc - 1
//Piata: zmienna $dlugosc musi byc inicjowana w funkcji
//Szosta: dac return zamiast echo w warunku if by nie nakladaly sie na siebie wywolania echo



function DlugoscSlowa($slowo)
{	
$counter = 0;
for ($i=0;$slowo[$i]!=null;$i++)
	$counter = $i+1;
	{
	return $counter;
	}
}
echo DlugoscSlowa('konstantynopol');

//Jakie byly problemy:
//Pierwszy: umiejscowienie $counter
//Drugi: proba wykorzystania funkcji isset
//Trzeci: doscie do $slowo[$i]!=null
