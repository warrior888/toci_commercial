 <?php

$arr = array
(
    'co ma ala' => 'ala ma kota',
    56 => 24,
    $variable,
    'jakas wartosc',
    'inna wartosc',
    24
);

//ShowArray($arrayName) => 'klucz: [nazwa_klucza], wartosc: [wartosc]

function ShowArray($arrayName)
{
    foreach($arrayName as $key => $value)
    {
        echo "$key: $value\n";
    }
}

echo "\nFunkcja ShowArray\n";
ShowArray($arr);
echo "\n";

//OwnCount($arrayName) => count($arrayName), for

function OwnCount($arrayName)
{
    $i = 0;
    
    foreach($arrayName as $value)
    {
        $i++;
    }
    
    return $i;
}

echo "\nFunkcja OwnCount\n";
echo OwnCount($arr);
echo "\n";

//echo count($arr); // 5

//ShowArrayInString($arrayName) => ma kota ma psa 9123 -> echo ShowArrayInString($exercises)

function ShowArrayString($arrayName)
{
    foreach($arrayName as $value)
    {
        echo "$value ";
    }
}

echo "\nFunkcja ShowArrayString\n";
ShowArrayString($arr);
echo "\n";

//HowManyIsInArray($arrayName, $field)
//var_dump(HowManyIsInArray($exercises, 88) => 2
//var_dump(HowManyIsInArray($exercises, 1500100900) => 0

function HowManyIsInArray($arrayName, $field)
{
    $i = 0;
    
    foreach($arrayName as $value)
    {
        if($value === $field)
        {
            $i = $i + 1;
        }
    }
    
    return $i;
}

echo "\nFunkcja HowManyIsInArray\n";
echo HowManyIsInArray($arr, 24); // 2
echo "\n";
echo HowManyIsInArray($arr, 99); // 0
echo "\n";