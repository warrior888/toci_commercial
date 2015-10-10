<?php

// PRZEPISUJEMY FUNKCJE BIBLIOTECZNE

// // // // // // // // // // // // // // // // // // // // // // // // // // // // // //

// --- STRLEN ---
// oblicza długość łańcucha string

// echo strlen('radar');

function own_strlen($string)
{
    $wynik = 0;
    $i = 0;
    
    while($string[$i] != null)
    {
        $wynik += 1;
        $i++;
    }
    
    return $wynik;
}

// echo own_strlen('ania ma kota'); // -> działa

// // // // // // // // // // // // // // // // // // // // // // // // // // // // // //

// --- STRREV ---
// odwraca ciąg znaków (odwraca string)
// tzn.
// radar => radar (bo jest to polindrom)
// beata => ataeb

// echo strrev('radar') . "\n";
// echo strrev('beata') . "\n";

function own_strrev($stringToRev)
{
    $myStringLength = own_strlen($stringToRev);
    $wynik = '';
    
    for($i = $myStringLength - 1; $i >= 0; $i--)
    {
        $wynik .= $stringToRev[$i];
    }
    
    return $wynik;
}

// echo own_strrev('ania'); // -> działa

function Palindrom($kandydat)
{
    if($kandydat == own_strrev($kandydat))
    {
        return $kandydat;
    }
}

// echo "1. " . Palindrom('radar'); // -> działa
// echo "\n";
// echo "2. " . Palindrom('beata'); // -> działa

// UWAGA!   Funkcja Palindrom - to nadmiarowy sposób sprawdzania Palindromu, poniewać sprawdzamy cały wyraz.
//          Powinniśmy od końca literka po literce sprawdzać, bo jak jedna się nie zgadza to słowo nie jest już palindromem.

function own_Palindrom($kandydat)
{
    $kandydatLength = own_strlen($kandydat);
    
    for($i = $kandydatLength - 1, $j = 0; $i >= 0, $j <= $kandydatLength - 1; $i--, $j ++)
    {
        if($kandydat[$i] != $kandydat[$j])
        {
            return false;
        }
    }
    
    return true;
}

// echo "1. " . own_Palindrom('radar'); // -> działa
// echo "\n";
// echo "2. " . own_Palindrom('beata'); // -> działa

// // // // // // // // // // // // // // // // // // // // // // // // // // // // // //

// --- STRSTR ---
// szuka wystąpienia łańcucha znakowego $nedle w łańcuchu $haystack
// Szukaj igły w stogu siana ;)

// echo strstr('Mama ma Ale, Ala ma kota.', 'ma'); // Wyświetli: 'ma ma Ale, Ala ma kota.'

function own_strstr($stogSiana, $igla)
{
    $stogSianaLength = own_strlen($stogSiana);
    $iglaLength = own_strlen($igla);
    
    $wynik = '';
    
    $i = 0;
    
        for ($k = 1, $j = $i + 1; $j < $stogSianaLength, $k <= $iglaLength; $k++, $j--)
	{
            if ($stogSiana[$j] == $igla[$iglaLength - k]) // 1. [1] == [1], [0] == [0] // 2. [2] == [1], [1] == [0]
            {
		$wynik .= $stogSiana[$j];
            }
            else
            {
                $i++;
            }
	}
        
        return $wynik;
}

// echo own_strstr('Ala ma', 'ma'); // -> NIE DZIAŁA

function own_strstr1($stogSiana, $igla)
{
    $stogSianaLength = own_strlen($stogSiana);
    $iglaLength = own_strlen($igla);
    
    $i = $stogSianaLength - 1; // [5]
    $wynik = '';
    
    while($i >= 0)
    {
        $k = $igla;
                
        for ($j = $i; $j < $stogSianaLength; $j--)
	{
            if ($stogSiana[$j] == $igla[$iglaLength - k]) // 1. [5] == [0], [4] == [1]
            {
                if($k == 0)
                {
                    while($i < $stogSianaLength)
                    {
                        echo $i . "\n";
                        $wynik .= $stogSiana[$i];
                        $i++;
                    }
                    
                    return $wynik;
                }
                else
                {
                    $k--;
                }
		
            }
            else
            {
                $i--;
            }
	}
        $i--;
    }
    
    return false;
}

 echo own_strstr1('Ala', 'ma'); // -> NIE DZIAŁA

// // // // // // // // // // // // // // // // // // // // // // // // // // // // // //

// --- STRPOS ---
// znajduje pozycję pierwszego wystąpienia podciągu w ciągu znaków
// --- STRRPOS ---
// znajduje pozycję ostatniego wystąpienia podciągu w ciągu znaków

//echo strpos('beata aciuk naciuk', 'aciuk'); // 6 pozycja
//echo strrpos('beata aciuk naciuk', 'aciuk'); // 13 pozycja

function own_strpos($stogSiana, $igla)
{
    // zadanie 3 - zrobić strpos z wykorzystaniem strstr
}

// echo own_strpos('beata aciuk naciuk', 'aciuk') // -> NIE DZIAŁA

// // // // // // // // // // // // // // // // // // // // // // // // // // // // // //

// nasza funkcja, która będzie wycinać tekst ($podmiana) z ciągu tekstu ($kandydat)

function own_strcut($kandydat, $podmiana)
{
    $kandydatLength = own_strlen($kandydat);
    $podmianaLength = own_strlen($podmiana);
    
    // lecimy po kandydacie
    for($i = 0; $i < $kandydatLength; $i++)
    {
        
    }
}

// echo own_strcut('beata naciuk', 'naciuk'); // -> NIE DZIAŁA

// // // // // // // // // // // // // // // // // // // // // // // // // // // // // //

// --- STR_REPLACE ---
// służy do zamiany, podmiany ciągu znaków, wyrazów
// $search - ciąg znaków, który ma być podmieniony
// $replace - ciąg znaków, na który ma być podmieniony pod $search
// $subject - ciąg, którego fragmenty będą podmieniane
// tzn.
// beata => |zmieniamy 'ata' na 'ikunio'| => beikunio
// beata => |zmieniamy 'beata' na 'wikunio'| => wikunio
// Beata Naciuk => |zmieniamy 'Naciuk' na 'Zapart'| => Beata Zapart

// echo str_replace('kota', 'psa', 'Ala ma kota.');
// echo str_replace('naciuk', 'zapart', 'beata naciuk');

function own_str_replace($podmiana, $textPodmiany, $kandydat)
{
    if(strstr($kandydat, $podmiana))
    {
        
    }
}

// echo own_str_replace('naciuk', 'zapart', 'beata naciuk'); // -> NIE DZIAŁA