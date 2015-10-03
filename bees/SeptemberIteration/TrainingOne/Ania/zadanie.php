<?php

//Z przedziału liczb 1 do 100 wyświetl wszystkie parzyste.

echo "\nZadanie_1\n";

for($i = 1; $i <= 100; $i++){
    if($i % 2 === 0){
        echo $i."\n";
    }
}

//Dodaj do siebie i zwróć wszystkie liczby z przedziału 20-30

echo "\nZadanie_2\n";

$sum = 0;
for($j = 20; $j <= 30; $j++){
    echo $sum=$sum+$j."\n";
}

//połączenie dwóch powyższych zadań

//$sum = 0;
//
//for($i = 1; $i <= 100; $i++){
//    if($i % 2 === 0){
//        echo $i."\n";
//        echo "suma wynosi ".$sum = $sum + $i."\n";
//    }
//}

