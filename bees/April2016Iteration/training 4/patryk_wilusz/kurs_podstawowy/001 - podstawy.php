<?php

    echo "Hellow Word";
    echo "\n";
    
    // Instrukcja warunkowa if
    $wiek = 14;
    if($wiek < 11)
    {
        echo 'Dziecko';
    }
    elseif($wiek < 18)
    {
        echo 'Nastolatek';
    }
    else
    {
        echo 'Dorosly';
    }

    // Pętla for
    $tekst = "kwadraty";
    for($i=0; isset($tekst[$i]); $i++) {} // strlen
    echo "\n";
    echo "Liter: $i";

    echo "\n";
    for($i=0; isset($tekst[$i]); $i++) 
    {
        echo "$tekst[$i]\n";
    }

    echo "\n";
    for($i=strlen($tekst)-1; $i>=0; $i--) 
    {
        echo "$tekst[$i]\n";
    }