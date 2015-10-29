<?php

// 1.Sprawdź, czy dany ciąg liczbowy ma parzystą ilość cyfr
 echo 'Zadanie 1:'."\n";
function Even($number)
{
    $string = (string)$number;
    $lenght = strlen($string);
    $counter = 0;
    
    for($i = 0; $i < $lenght ; $i++)
    $counter++;
    {
        if((int)$counter%2 === 0)
            
        {
          return 'Ciag liczbowy ma parzysta ilosc cyfr';
        }
        else
        {
            return 'Ciag liczbowy nie ma parzystej ilosci cyfr';
            
        }
    }
}
echo Even(12345678);
echo "\n \n \n";
echo 'Zadanie 2:'."\n";


// 2.Sprawdź, czy dany ciąg liczbowy ma ilość cyfr podzielną przez n
 
function Divisible($number, $n)
{
    $string = (string)$number;
    $lenght = strlen($string);
    $counter = 0;
    
    for($i = 0; $i < $lenght; $i++)
    {
        if((int)$string[$i]%$n === 0)
        {
            $counter++;
        }
        //var_dump($counter);
        
    }
return $counter;
        }

 
echo Divisible(123456, 3);
echo "\n \n \n";
echo 'Zadanie 3:'."\n";

// 3.Stwórz drzewo genealogiczne - tablica $rodzina, dziadkowie, rodzice, dzieci

$familyTree = array('Pradziadkowie' => array('Adam','Ewa'), 'Dziadkowie'=> array('Jan','Monika'), 'Rodzice'=>array('Bogdan','Sylwia'), 'Dzieci'=>array('Ala','Ola'));

print_r($familyTree);  // dziala podobnie do var_dump

foreach($familyTree as $key => $value)  //czemu wyświetla 'array' zamiast wartosci?
{
    echo $key.'  '.$value."\n";
}
        
       

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

