<?php

   $example = array('AdrianK' => 
    array('Dzieci' => 
        array('Jas', 'Malgosia')), 
    'Arecki', 
    'Luk' => array('telefon' => '724433021'), 
    'Pakoo', 
    'Sosza', 
    'Ubot' => array('samochody' => 
                    array('Audi', 'BMW')));

//wyswietl dzieci AdrianaK (foreach)
//Wyswietl numer Luka [][]
//Wyswietl samochody Ubota (foreach)

echo 'Numer Luka to: ' . $example['Luk']['telefon'];

$AdrianK = $example['AdrianK']['Dzieci'];

foreach ($AdrianK as $child) {

    echo 'Dzieci Adriana  sa ' . $child . "\n";
}

$UbotCars = $example['Ubot']['samochody'];

foreach ($UbotCars as $car) {

    echo ' ' . $car . "\n";
}

?>