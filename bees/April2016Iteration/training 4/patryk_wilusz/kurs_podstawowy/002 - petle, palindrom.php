<?php

    //Rozwinięta pętla, palindrom
    $test = 'Igor lamal rogI';
    $dlugosc = strlen($test);

    echo 'Dlugosc: '.$dlugosc."\n";

    for($i=0, $j = $dlugosc-1; $i < $j; $i++, $j--)
    {
        if ($test[$i] != $test[$j])
        {
            echo 'To nie jest palindrom.';
            break;
        }
    }
    echo "\n";

//###############################################################
    //funkcje
//###############################################################

    $test2 = 'ala';

    function dlugosc_tekstu($text)
    {
        for($i=0; isset($text[$i]); $i++) {}
        return $i;
    }

    function odwrocony_tekst($text)
    {
        $buff = '';
        for($i=dlugosc_tekstu($text)-1; $i>=0; $i--)
        {
            $buff .= $text[$i];
        }
        return $buff;
    }

    function palindrom($text)
    {
        if(odwrocony_tekst($text) == $text)
        {
            return 'Tak';
        }
        else
        {
            return 'Nie';
        }
    }

    echo 'Dlugosc tekstu '.$test2.' wynosi: '.dlugosc_tekstu($test2)."\n";
    echo 'Odwrocony tekst '.$test2.' = '.odwrocony_tekst($test2)."\n";
    echo 'Czy tekst '.$test2.' jest palindromem: '.palindrom($test2)."\n";

    // zadanie 1
    function porownanie($text1, $text2)
    {
        return taknie($text2 == $text1);
    }

    function taknie($wartosc)
    {
        if($wartosc)
        {
            return 'Tak';
        }
        else
        {
            return 'Nie';
        }
    }

    $tekst1 = 'Alba';
    $tekst2 = 'Alaa';
    echo "\n\n";
    echo 'Czy tekst '.$tekst1.' jest taki sam jak '.$tekst2.': '.porownanie($tekst1, $tekst2);