<?php

$wyraz = "lalalalol";
$znaki ="la";
$policzWystepowanie = substr_count($wyraz, $znaki);
if ($policzWystepowanie == 1){
  $koniecZdania = "raz";
}

echo "Ciag znakow" . $znaki . 'w wyrazie "' .$wyraz '\" wystepuje " . $policzWystepowanie . $koniecZdania ;
