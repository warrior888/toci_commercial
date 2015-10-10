<?php

$number1 = 10;
$number2 = 4;
$sum = $number1+$number2;               //dodawanie
$difference = $number1-$number2;        //odejmowanie
$product = $number1/$number2;           //dzielenie
$quotient = $number1*$number2;          //mnożenie

   if($number1 % 2 ===0)
            
            {
       echo "$sum \n$difference \n$product \n$quotient";
            }
 
   else 
            {
         echo"Liczba nieparzysta";
            }