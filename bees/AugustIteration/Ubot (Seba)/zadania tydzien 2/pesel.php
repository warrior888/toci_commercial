<?php
$pesel = array(
        "89031004773",
        "56062894773",
        "88110494783",
        "98050408473",
        "71120212653",
        "73122012408",
        "73130716630",
        "96192301020",
        "80030714131",
        "77180505390",
        "80020617006",
        "79040410704",
        "80030407147",
        "80062912806",
        "55042102582",
        "80012017384",
        "80030713925",
        "91020419284",
        "93011105363",
        "86071804628");

//Funkcje
function CutDateWithPesel($pesel)
{
    return substr($pesel, 0, 6);
}

function SeperateDateWithPesel($dateWithPesel)
{

    $year = substr($dateWithPesel, 0, 2);
    $month = substr($dateWithPesel, 2, 2);
    $day = substr($dateWithPesel, 4, 2);

    return "Year: " . $year.", month: ".$month.", day: ".$day ."ciapki \n";
}

function CheckMonth()
{

}

function CheckDay($value='')
{
    # code...
}

function CheckYear($value='')
{
    # code...
}

function IsYearIntercalary($value='')
{
    # code...
}

function Checksum($value='')
{
    # code...
}

// Wywolania

var_dump (SeperateDateWithPesel($pesel))
?>
