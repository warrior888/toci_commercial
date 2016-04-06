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

echo wk_strrev('waldemar');