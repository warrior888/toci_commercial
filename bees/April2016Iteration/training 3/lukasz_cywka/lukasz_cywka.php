<?php
echo "Działa ";
$wiek = 16;
if($wiek > 16 && $wiek < 19)
{
    echo 'Szkola srednia';
}
if($wiek == 18)
{
    echo 'Liceum';
}
else
{
    echo 'Technikum';
}
if($wiek > 19 && $wiek < 24 || $wiek<25)
{
    echo ' Studia ';
}
?>
