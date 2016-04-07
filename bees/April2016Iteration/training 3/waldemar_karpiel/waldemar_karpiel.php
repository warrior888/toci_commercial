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

function wk_strpos($myString, $findMe)
{
    if (strlen($myString) >= strlen($findMe)) {
        for ($i = 0; $i <= (strlen($myString) - 1); $i++)
        {
            if ($myString[$i] == $findMe[0])
            {
                for ($x = 0; $x <= (strlen($findMe) - 1); $x++)
                {
                    if(isset($myString[($i + $x)])) {
                        if($myString[($i + $x)] == $findMe[$x])
                        {
                            if($x == (strlen($findMe) - 1)) {
                                return $i;
                            }
                        }
                    }
                }
            }
        }
    }
}

echo wk_strpos('waldemar', 'emar');