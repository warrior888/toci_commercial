<?php

echo "\n";
echo 'To dziala';
echo "\n";

//zmienne
$wiek = 12;
$nazwa = 'tresc';

$zinterpertowany = 'Moj wiek to: ' . $wiek;

$limitWiekuDoroslosci = 18;

//operatory
// + - * / || && == === > < >= <= .

//true false null

//instrukacja warunkowa
if ($wiek >= $limitWiekuDoroslosci)
{
    echo 'Osoba jest dorosla';
}
else
{
    echo 'Mamy tu dziecko';
}

echo "\n";

if ($wiek > 6 && $wiek < 12)
{
    echo 'podstawowka';
}

if ($wiek >= 12 && $wiek < 15)
{
    echo 'gimbaza';
}

if ($wiek >= 15 && $wiek < 19)
{
    echo 'liceum';
}

if ($wiek >= 19 && $wiek < 24)
{
    echo 'studia';
}

if ($wiek >= 24)
{
    echo 'studia';
}

echo "\n";

//petla