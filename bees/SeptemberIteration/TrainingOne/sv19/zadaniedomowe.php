<?php
$sum = 0;
for ($i = 1; $i <= 100; $i++) {
    if ($i % 2 === 0) {
        echo "$i \n";
    }
}
for ($i = 1; $i <= 100; $i++) {
    if ($i % 2 === 0) {
        $sum += $i; // $sum = $sum + $i;
    }
}

echo "Suma liczb wynosi $sum \n";

for ($i = 1; $i <= 100; $i++) {
    if ($i > 19 && $i < 31) //&& $i % 2 === 0)
    {
        echo "$i \n";
    }
}

for ($i = 20; $i <= 30; $i++) {

    echo $i;

    $sum = 0;

    if ($i > 19 && $i < 31) //&& $i % 2 === 0)
    {
        $sum += $i;
    }

    echo $sum;

}