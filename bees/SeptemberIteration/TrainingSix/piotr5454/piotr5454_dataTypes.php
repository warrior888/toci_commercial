<?php
//Sprawdź, czy dany ciąg liczbowy ma parzystą ilość cyfr



//Sprawdź, czy dany ciąg liczbowy ma ilość cyfr podzielną przez n
	
function iloscCyfrPodzielna($number,$n)
{	
	$string = (string)$number;
	$lenght = strlen($string);
	
	$counter=0;
	for($i=0; $i<=$lenght; $i++)
        { 
            $counter++;
                if ($counter%$n===0)
		{
                    echo $counter."\n";
		}
        }  
    
}
	
iloscCyfrPodzielna(234567894,3);


//Stwórz drzewo genealogiczne - tablica $rodzina, dziadkowie, rodzice, dzieci
        
        
$rodzina = array ('Dziadkowie'=> array('Czeslaw','Marta'), 
                  'Rodzice'=> array('Kinga','Andrzej'),
                  'Dzieci'=> array('Piotr','Magda'));

var_dump($rodzina);

