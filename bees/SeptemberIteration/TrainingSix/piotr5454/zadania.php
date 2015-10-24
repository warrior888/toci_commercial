<?php
//Sprawdź, czy dany ciąg liczbowy ma parzystą ilość cyfr
//
function Parzysta($number)
{

	$string = (string)$number;
	$lenght = strlen($string);
	
	$counter=0;
	for($i=0; $i<$lenght; $i++)
        {
	$counter = $counter+1;
	
	if ($counter===$number)
		{
		return true;
		}
	}
return false;	
}       
Parzysta(1234);

////Sprawdź, czy dany ciąg liczbowy ma ilość cyfr podzielną przez n
//	
function SprawdzPodzielnosc($number,$n)
{	
	$string = (string)$number;
	$lenght = strlen($string);
	
	$counter=0;
	for($i=1; $i<=$lenght; $i++)
        {
            if ($i%$n===0)
		{
		$counter = $counter+1;
		}
        }  
    return $counter;
}
	
echo SprawdzPodzielnosc(123456789447,3);


//Stwórz drzewo genealogiczne - tablica $rodzina, dziadkowie, rodzice, dzieci
        
        
$rodzina = array ('Dziadkowie'=> array('Czeslaw','Marta'), 
                  'Rodzice'=> array('Kinga','Andrzej'),
                  'Dzieci'=> array('Piotr','Magda'));

var_dump($rodzina);

