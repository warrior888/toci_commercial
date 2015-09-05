<?php

$array = ['kontakty' => ['rodzina' => ['id01' =>[ 'imie' => 'Tomek', 'numer' => '666 666 666', 'nazwisko' => 'Robak']],
                                    ['id02' =>[ 'imie' => 'Ola', 'numer' => '665 633 666', 'nazwisko' => 'Grad']]],
                        ['praca' => ['id01' =>[ 'imie' => 'Maciek', 'numer' => '661 666 336', 'nazwisko' => 'Pies']],
                                    ['id02' =>[ 'imie' => 'Tomek', 'numer' => '666 666 777', 'nazwisko' => 'Kot']]]
            ];

var_dump($array);

function ZnajdzKontakt($array,$nazwa)
{
    foreach ($array as $value) {
        if (is_array($value)) {

            $przypisanie = function ZnajdzKontakt($value,$nazwa);

            if($przypisanie){
                return $przypisanie;
            }
        }

        elseif ($value === $nazwa) {
            return $nazwa;
        }
        else {
            $nowyKontakt[] = $nazwa;
        }
    }
}

ZnajdzKontakt($array, 'Tomek');
