<?php
$pesel = array('84080818074', '11241411113', '84110803119', '73062603455', '73362603455');

$dlugosc = sizeof($pesel);
for($i=0; $i < $dlugosc; $i++)
{
    $data = WytnijDate($pesel[$i]);
    echo RozdzielDate($data).' | '.SprawdzSumeKontrolna($pesel[$i])."\n";
}

function WytnijDate($text)
{
    return substr($text, 0, 6);
}

function RozdzielDate($data)
{
    $rok = substr($data, 0, 2);
    $miesiac = substr($data, 2, 2);
    $dzien = substr($data, 4, 2);
    
    $check_month = SprawdzMiesiac($miesiac);
    if($check_month && SprawdzDzien($dzien, $check_month, $rok))
    {
        return 'Rok: '.SprawdzRok($rok, $miesiac).$rok.', miesiac '.$check_month.', dzien: '.$dzien;
    }
    else
    {
        return 'Nieprawidlowa data';
    }
    
}

function SprawdzRok($rok, $miesiac)
{
    if($miesiac < 20) {
        return 19;
    } elseif($miesiac < 40) {
        return 20;
    } elseif($miesiac < 60) {
        return 21;
    } elseif($miesiac < 80) {
        return 22;
    } else {
        return 18;
    }
}

function SprawdzMiesiac($miesiac)
{
    for($i = 0; $i < 9; $i+=2)
    {
        if($miesiac > $i*10 && $miesiac < $i*10+13)
        {
            return $miesiac-$i*10;
        }
    }
    return false;
}

function SprawdzDzien($dzien, $miesiac, $rok)
{
    $czy_przestepny = SprawdzCzyPrzestepny($rok);
    if(($miesiac == 1 || $miesiac == 3 || $miesiac == 5 || $miesiac == 7 || $miesiac == 8 || $miesiac == 10 || $miesiac == 12) && $dzien <= 31)
    {
        return true;
    } 
    elseif(($miesiac == 4 || $miesiac == 6 || $miesiac == 9 || $miesiac == 11 ) && $dzien <= 30)
    {
        return true;
    }
    elseif($miesiac == 2 && (($czy_przestepny && $dzien <= 29) || $dzien <= 28))
    {
        return true;
    }
    return false;
}

function SprawdzCzyPrzestepny($rok)
{
    if($rok % 4)
    {
        return false;
    }
    return true;
}

function SprawdzSumeKontrolna($pesel)
{
    $numbers = str_split($pesel, 1);
    $weight = array(1, 3, 7, 9, 1, 3, 7, 9, 1, 3);
    for($i=0; $i < 10; $i++)
    {
        $key[$i] = $numbers[$i]*$weight[$i];
    }
    return ((10-array_sum($key)%10)%10 == $numbers[10]) ? 'Suma kontrolna jest prawidlowa' : 'Suma kontrolna jest nieprawidlowa';
}
