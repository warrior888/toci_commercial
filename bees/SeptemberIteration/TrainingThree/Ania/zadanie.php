<?php

// -------------------- PALINDROM ----------------------------------------

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

// echo var_dump(own_Palindrom('radar'));
// echo var_dump(own_Palindrom('beata'));

// -------------------- STRLEN ----------------------------------------

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

// echo own_strlen('ania ma kota');

// -------------------- STRSTR ----------------------------------------

function own_strstr($stogSiana, $igla)
{
    $stogSianaLength = own_strlen($stogSiana);
    $iglaLength = own_strlen($igla);
    
    $k = $iglaLength;
    $i = 0;
    
    $wynik = '';
        
    while($i < $stogSianaLength)
    {
        if($stogSiana[$i] === $igla[$iglaLength - $k])
        {
            if($k === 1)
            {
                for($j = $i - $iglaLength + 1; $j < $stogSianaLength; $j++)
                {
                    $wynik .= $stogSiana[$j];
                }
                
                return $wynik;
            }
            else
            {
                $k--;
                $i++;
            }
        }
        else
        {
            $i++;
        }
    }
    return false;
}

// echo own_strstr('Mama ma Ale, Ala ma kota', 'ma');

// -------------------- STRPOS ----------------------------------------

function own_strpos($stogSiana, $igla)
{
    $stogSianaLength = own_strlen($stogSiana);
    $iglaLength = own_strlen($igla);
    
    $k = $iglaLength;
    $i = 0;
    
    $wynik = '';
        
    while($i < $stogSianaLength)
    {
        if($stogSiana[$i] === $igla[$iglaLength - $k])
        {
            if($k === 1)
            {
                return $i - $iglaLength + 1;
            }
            else
            {
                $k--;
                $i++;
            }
        }
        else
        {
            $i++;
        }
    }
    return false;
}

// echo own_strpos('Mama ma Ale, Ala ma kota', 'ma');