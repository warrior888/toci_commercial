<?php

$number = 12; //jak sprawdzić czy 12 jest podzielne przez 2 i 3 jednocześnie

if ($number % 2 === 0)//instrukcje można zagnieżdżać
{
    if ($number % 3 === 0)
    {
        echo "zmienna ".$number." jest podzielna przez 2 i przez 3" ."\n";
    }
else {
    echo "$number. jest podzielna przez dwa, ale nie przez 20";
}
    if ($number % 6 === 0)
    {
        echo "$number jest podzielne przez 2, 3 i 6";
    }
}  