<?php

class Methods {

    public $slowo;
    public $litera;
    public $wycinek;
    public $zamiennik;
    public $liczba;
    public $slowoDrugie;
    
    // Funkcja 1 - Ile razy w podanym słowie wystepuję podana litera
    public function ileRazy ($slowo, $litera) {   
    
    $x=0;
    
    for ($i=0; $i < strlen($slowo); $i++) { //strlen ---> funkcja która liczy ilość znakow w stringu.
        
            if ($slowo[$i] == $litera) {
              $x+=1;  
            }  
    }
    
    if ($x !=0) {   // rownie dobrze mozna tu napisać if ($x) bo jeśli jest rozny od zera to odgornie wykona pierwszy blok kodu
    echo "\n" . 'Liczba liter "' . $litera . '" w slowie "' . $slowo . '" to: ' . $x . "\n";
    } else {
        echo 'Brak litery ' . $litera . ' w slowie ' . $slowo;
    }
        
}
    
    // Funkcja 2 - Ile razy w danym stringu wystepują podane w nim litery.
    public function sprawdzSlowo ($slowo) { 
    
    
    $alfabet = array ('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'r', 's', 't', 'u', 'w', 'x', 'y', 'z');
    
    for ($j=0; $j < count($alfabet); $j++) {
        
    $x=0;
        
    for ($i=0; $i < strlen($slowo); $i++) {  //strlen ---> funkcja która liczy ilość znakow w stringu
        
            if ( $slowo[$i] == $alfabet[$j] ) {
              $x+=1;  
            }  
}
     if ($x !=0) {
    echo 'Liczba liter "' . $alfabet[$j] . '" w slowie "' . $slowo . '" to: ' . $x . "\n";
    } 
       
}
    
}

    // Funkcja 3 - Ile razy dany ciag znakow występuje w jakimś podanym stringu.
    public function slowoWSlowie ($slowo, $wycinek) { 

    $dlugosc1 = strlen($slowo); //strlen ---> funkcja która liczy ilość znakow w stringu.
    $dlugosc2 = strlen($wycinek);
    $y = 0;
    
    for ($i=0; $i < $dlugosc1; $i++) {
        
        $x = substr($slowo, $i, $dlugosc2); //substr ---> funkcja pozwalająca wycinać dowolna ilość znaków ze stringu.

            if ($x == $wycinek) {
                $y+=1; 
            }      
    }
    
     switch ($y) { //switch - dla poszczególnych wartości zmiennej podaje co ma kod wywołać. To taki lepszy if-else.
                  
         case 0: // case - przypadek. Czyli w przypadku gdy $y=0 wyświetli poniższe echo.
             
             echo "\n" . ' W ciagu tesktowym ' . $slowo . ' wycinek ' . $wycinek . ' nie wystepuje.';
             break;
             
         case 1: //gdy $y=1 wyswietli to echo z pod spodu.
             
             echo "\n" . ' W ciagu tesktowym ' . $slowo . ' wycinek ' . $wycinek . ' wsytepuje ' . $y . ' raz.' . "\n";
             break;
             
         default: // gdy $y nie będzie się równać ani 1 ani 0 to "domyślnie" wyświetli to:
             
             echo "\n" . ' W ciagu tesktowym "' . $slowo . '" wycinek "' . $wycinek . '" wsytepuje ' . $y . ' razy.' . "\n";
             break;
        
     }

}
    
    // Funkcja 4 - Zamień w tekscie pewien ciag znaków na inny, a reszte zostaw na swoim miejscu.
    public function zamienWycinek ($slowo, $wycinek, $zamiennik) {
    
    $dlugoscTekstu = strlen($slowo);
    $dlugoscWycinka = strlen($wycinek);
    
        
     for ($i=0; $i < $dlugoscTekstu; $i++) {
        
        $x = substr($slowo, $i, $dlugoscWycinka);

            if ($x == $wycinek) {
                
             $tekscior[] = $zamiennik;
                $i = $i + $dlugoscWycinka - 1;
                 
                } else {
            
                $tekscior[] = $x[0];
                
            }
         
            }
    
    for ($j=0; $j < count($tekscior); $j++) {
    
   echo  $tekscior[$j];
        
    }

}

    // Funkcja 5 - Napisać funkcję, która dla zadanego tekstu oraz parametru liczbowego np 3 zwraca tekst z co 3 literą wielką. 
    public function zamienTekst ($slowo, $liczba) {
    
    for ($i=$liczba-1; $i < strlen($slowo); $i+=$liczba) {
    
        $slowo[$i] = strtoupper($slowo[$i]); // strtoupper ---> funckja "wbudowana w php" (funkcja globalna?, metoda obiektu globalnego string ?) zamieniająca małe litery na duże 
        
    }
    
    echo "\n" . 'Tekst zamieniony: ' . $slowo . "\n";

}
    
    // Funkcja 6 - Sprawdzenie czy 2 teksty sa anagramami, z czego anagramem jest słowo, które ma ten sam zestaw liter tylko w dowolnym szyku.
    public function sprawdzAnagram ($slowo, $slowoDrugie) {

   $y=0;
    
    if (strlen($slowo) == strlen($slowoDrugie)) {
    
      for ($j=0; $j <strlen($slowo); $j++) {  
        
         $x=0;
        
        for ($i=0; $i <strlen($slowo); $i++) {
        
            if ($slowo[$j] == $slowoDrugie[$i]) {
            
                $x+=1;
                
            }
        
        }
          
         $y+=$x; 
      }
        
        if ($y >= strlen($slowo)) {
            
            echo "\n" . 'Slowa ' . $slowo . ' i ' . $slowoDrugie . ' sa anagramem.' . "\n";
          
          } else {
            
             echo "\n" . 'Slowa ' . $slowo . ' i ' . $slowoDrugie . ' nie sa anagramami.' . "\n";
            
        }
        
    } else {
        
        echo "\n" . 'Slowa ' . $slowo . ' i ' . $slowoDrugie . ' nie sa anagramami.' . "\n"; 
        
    }

}

}

$example = new Methods();

// Funkcja 1
$example->ileRazy('cokolwiek', 'o');
echo "\n";

// Funkcja 2
$example->sprawdzSlowo('cokolwiek');
echo "\n";

// Funkcja 3
$example->slowoWSlowie('Konstantynopolitanczykowianeczka', 'an');
echo "\n";

// Funkcja 4
$example->zamienWycinek('lalalol', 'la', 'heh');
echo "\n";

// Funkcja 5
$example->zamienTekst('ala ma kota', 3);
echo "\n";

// Funkcja 6
$example->sprawdzAnagram('ptak', 'pakt');
echo "\n";


?>