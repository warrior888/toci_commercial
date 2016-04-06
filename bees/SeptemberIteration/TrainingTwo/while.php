<?php

for ($i = 0; $i <= 100; $i++) {
    if ($i % 2 === 0) {
        echo $i."\n";
    }
}

$i = 0;
while ($i <= 100) // => true
{
    if ($i % 2 === 0) {
        echo $i."\n";
    }
    $i++;
}