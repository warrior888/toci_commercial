<?php

//Drzewo genealogiczne

$Dzewo = array ('Pradziadkowie' => array('Tomasz','Ewelina'), 'Dziadkowie'=> array('Jacek','Stanislawa'), 'Rodzice'=>array('Jan','Teresa'));

var_dump($Dzewo);
foreach($Dzewo  as $key => $value)
{
    echo $key.'  '.$value."\n";
}
