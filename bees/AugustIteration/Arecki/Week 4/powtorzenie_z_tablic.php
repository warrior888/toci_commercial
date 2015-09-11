<?php

//$computer('hradware' => array('motherboard' => arra('MSI'))
//$myComputer - poszczególne części

function ShowMyComputerInfo()
{
    $computer = array();

$computer['type'] = array('laptop', 'tower PC');
$computer['hardware']['motherboard']['brands'] = array('MSI', 'ASUS', 'Gigabyte', 'Samsung');
$computer['hardware']['videoCard']['brands'] = array('Nvidia', 'Radeon');
$computer['hardware']['audioCard']['brands'] = array('Realtek', 'Creative Labs', 'ASUS', 'M-Audio');
$computer['hardware']['memoryRAM']['brands'] = array('Kingston', 'Crucial', 'Corsair');
    
    echo 'Moj komputer (' . $computer['type'][0] . ') sklada sie z: ' . "\n" . "\n" . 
        'karta graficzna: ' . $computer['hardware']['videoCard']['brands'][0] . "\n" .
        'plyty glownej: ' . $computer['hardware']['motherboard']['brands'][1] . "\n" .
        'karty dzwiekowej: ' . $computer['hardware']['audioCard']['brands'][0] . "\n" .
        'pamieci RAM firmy: ' . $computer['hardware']['memoryRAM']['brands'][0];
}

ShowMyComputerInfo();

?>