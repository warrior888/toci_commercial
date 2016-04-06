<?php

function wk_strrev($text)
{
    $odwrocony = '';

    for ($i = (strlen($text) -1); $i >=0; $i--)
    {
        $odwrocony = $odwrocony . $text[$i];
    }

    return $odwrocony;
}

function wk_palindrome($text)
{
    return $text == wk_strrev($text);
}

//function wk_strpos($myString, $findMe)
//{
//    for ($i = 0; $i <= strlen($myString); $i++)
//    {
//        if ($myString == $findMe)
//        {
//
//        }
//    }
//}

echo wk_strpos('waldemar', 'ald');