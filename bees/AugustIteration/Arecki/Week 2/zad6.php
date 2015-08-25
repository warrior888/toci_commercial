<?php

//Zad6 - Sprawdzenie czy 2 teksty sa anagramami, z czego anagramem jest słowo, które ma ten sam zestaw liter tylko w dowolnym szyku.

function sprawdzAnagram ($text1, $text2) {

   $y=0;
    
    if (strlen($text1) == strlen($text2)) {
    
      for ($j=0; $j <strlen($text1); $j++) {  
        
         $x=0;
        
        for ($i=0; $i <strlen($text1); $i++) {
        
            if ($text1[$j] == $text2[$i]) {
            
                $x+=1;
                
            }
        
        }
          
         $y+=$x; 
      }
        
        if ($y >= strlen($text1)) {
          
            echo 'Slowa ' . $text1 . ' i ' . $text2 . ' jest anagramem.';
          
          }
    
    } else {
        
        echo "\n" . 'Slowa ' . $text1 . ' i ' . $text2 . ' nie sa anagramami.'; 
        
    }

}

sprawdzAnagram('loka', 'kola');