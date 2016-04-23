<?php

function pw_substr($text, $start, $lenght = NULL)
{
    $str_len = pw_strlen($text);
    if($start < 0)
    {
        $start = $str_len-abs($start);
    }
    if(!isset($lenght)) 
    {
        $lenght = $str_len-abs($start);
    }
    else if($lenght < 0)
    {
        $lenght = $str_len-abs($start)-abs($lenght);
    }
    
    $substring = '';
    for($i = $start; $i <= $start+$lenght-1; $i++)
    {
        if (isset($text[$i])){
            $substring .= $text[$i];
        }
    }
    return $substring;
}

function pw_strlen($text) {
    for($i=0; isset($text[$i]); $i++) {}
    return $i;
}

function check_function($text, $checked, $show = false)
{
    $count = pw_strlen($text);
    $passed = 0;
    $failed = 0;
    $print = '';
    for($i = 0; $i < $checked; $i++)
    {
        $value1 = rand(-$count, $count);
        $value2 = rand(-$count, $count);
        if(pw_substr($text, $value1, $value2) == substr($text, $value1, $value2)) /* nie porownuje tutaj rowniez typow, poniewaz strlen zwraca false w 
                                                                                     popierdolonych sytuacjach, a nie chcialem dodawac pierdyliard ifow tylko
                                                                                     po to, aby sie typy zgadzaly :D
                                                                                    */
        {
            $passed++;
            if($show != false)
            {
                $print .= "Passed ($text, $value1, $value2)\n";
            }
        } 
        else 
        {
            $failed++;
            $print .= "Fail ($text, $value1, $value2)\n";
        }
    }
    return "Passed: $passed, Failed: $failed\n".$print;
}

echo check_function('Kto sie w phpie polapie', 50, true);