<?php

//Dodaj do siebie i zwróć wszystkie liczby z przedziału 20-30.

$suma = 0;

for ($i = 0; $i < 100; $i++) {
    if ($i > 19 && $i < 31) {
        $suma = $suma + $i;
    }
}

echo $suma;