<?php

function rekurencja($liczba)
{
    if($liczba < 2)
    {
        return 1;
    }
    return rekurencja($liczba-1) * $liczba;
}

echo rekurencja(4);
echo "\n\n\n____________________\n\n\n";

function fibb($n)
{
    if($n < 3) {
        return 1;
    }
    return fibb($n-1) + fibb($n-2);
}

echo fibb(3);
echo "\n\n\n____________________\n\n\n";
/*$tablica = array('Beata' => array('Wiktor' => array('Antoni' => array('Maliwna', 'Krzysztof'), 'Karol'), 'Marzena', 'Dominika'), 'Aneta' => array('Albert', 'Mikolaj'));

$test = array('mama' => 656756775, 'tata' => 435453454, 'dziadek' => 453434464);
foreach($test as $key => $value)
{
    echo $key.": ".$value."\n";
}*/

$kontakty = [
                ["rodzina" =>
                 [
                    ["nazwa" => "Jacek Duda", "numer" => "532645437"],
                    ["nazwa" => "Weronika Duda", "numer" => "553646435"],
                    ["nazwa" => "Tomasz Duda", "numer" => "586638541"]
                 ]

                ],
                ["praca" =>
                 [
                    ["nazwa" => "Karolina Kowalska", "numer" => "553457325"],
                    ["nazwa" => "Weronika Nowak", "numer" => "657657525"],
                    ["nazwa" => "Jarosław Duda", "numer" => "777457632"]
                 ]
                ]
            ];
    
//var_dump($kontakty);

function WypiszKontakty($kontakty)
{
    foreach($kontakty as $key => $value)
    {
        if(is_array($value))
        {
            if(!is_numeric($key))
            {
                echo "Grupa [$key]\n";
            }
            WypiszKontakty($value);
        }
        else
        {
            if($key == "nazwa") 
            {
                echo "    $value";
            } 
            else 
            {
                echo " - $value\n";
            }
                
        }
    }
}

function ZnajdzKontakt($kontakty, $nazwa)
{
    $kon = '';
    foreach($kontakty as $key => $value)
    {
        if(is_array($value))
        {
            $kon .= ZnajdzKontakt($value, $nazwa);
        }
        else
        {
            if(is_numeric(strpos($value, $nazwa)))
            {
                $kon .= $value."\n";
            }
        }
    }
    return $kon;
}

WypiszKontakty($kontakty);
echo "\n";
echo ZnajdzKontakt($kontakty, "Jacek");
