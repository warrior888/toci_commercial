<?php

//$computer('hradware' => array('motherboard' => arra('MSI'))
//$myComputer - poszczególne części
$computer = array();

$computer['type'] = array('laptop', 'tower PC');
$computer['hardware']['motherboard']['brands'] = array('MSI', 'ASUS', 'Gigabyte', 'Samsung');
$computer['hardware']['videoCard']['brands'] = array('Nvidia', 'Radeon');
$computer['hardware']['audioCard']['brands'] = array('Realtek', 'Creative Labs', 'ASUS', 'M-Audio');
$computer['hardware']['memoryRAM']['brands'] = array('Kingston', 'Crucial', 'Corsair');

function ShowMyComputerInfo($computerInfo) {

    echo 'Moj komputer (' . $computerInfo['type'][0] . ') sklada sie z: ' . "\n" . "\n" .
    'karta graficzna: ' . $computerInfo['hardware']['videoCard']['brands'][0] . "\n" .
    'plyty glownej: ' . $computerInfo['hardware']['motherboard']['brands'][1] . "\n" .
    'karty dzwiekowej: ' . $computerInfo['hardware']['audioCard']['brands'][0] . "\n" .
    'pamieci RAM firmy: ' . $computerInfo['hardware']['memoryRAM']['brands'][0];
}

ShowMyComputerInfo($computer);

?>