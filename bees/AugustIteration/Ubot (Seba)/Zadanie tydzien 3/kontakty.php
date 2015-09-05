<?php

$kontakty = ['grupy' =>
                ['Grupa_Rodzina' =>
                    ['Mama' => '+48 900 900 900', 'Brat' => '+48 777 900 977', 'Kuzyn' => '+48 900 900 900'],
                'Grupa_Znajomi' =>
                    ['Patryk' => '+48 111 111 111', 'Rafal' => '+48 222 333 666', 'Ola' => '+48 999 111 444'],
                'Grupa_Praca' =>
                    ['Ksiegowa' => '+48 510 510 910', 'CEO' => '+48 777 900 977', 'Sekretarka' => '+48 300 933 900' ]]];
var_dump($kontakty);

function ZnajdzKontakt($array,$nazwa)
{
    foreach ($array as $value) {
        if (is_array($key)) {

            $przypisanie = function ZnajdzKontakt($array,$nazwa);

            if($przypisanie){
                return $przypisanie;
            }
        }

        elseif ($key === $nazwa) {
            return $value;
        }
        else {
            $nowyKontakt[] = $nazwa;
        }
    }
}

ZnajdzKontakt($kontakty, 'Sekretarka');
