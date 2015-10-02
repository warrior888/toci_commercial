<?php

function Fibonaci($value)
{
    if ($value < 2){
        return $value;
    }
    else {
        return Fibonaci($value - 1) + Fibonaci($value - 2);
    }
}

echo Fibonaci (60);
