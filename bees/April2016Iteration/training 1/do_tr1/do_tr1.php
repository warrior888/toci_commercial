<?php
    echo "\n";
    echo 'To dziala';
    echo "\n";

    $wiek = 12;
    $nazwa = 'tresc';
    $zinterpertowany = 'Moj wiek to: ' . $wiek;
    $limitWiekuDoroslosci = 18;

    if ($wiek >= $limitWiekuDoroslosci) {
        echo 'Osoba jest dorosła';
    }
    else {
        echo 'Mamy tu dziecko';
    }

    echo "\n";

    if ($wiek > 6 && $wiek < 12) {
        echo 'Podstawówka';
    }

    if ($wiek >= 12 && $wiek < 15) {
        echo 'Gimnazjum';
    }

    if ($wiek >= 15 && $wiek < 19) {
        echo 'Liceum';
    }

    if ($wiek >= 19 && $wiek < 24) {
        echo 'Studia';
    }

    echo "\n";