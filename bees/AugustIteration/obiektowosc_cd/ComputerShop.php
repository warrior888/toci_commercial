<?php

$computer['type'] = array('laptop', 'tower PC');
$computer['hardware']['motherboard']['brands'] = array('MSI', 'ASUS', 'Gigabyte', 'Samsung');
$computer['hardware']['videoCard']['brands'] = array('Nvidia', 'Radeon');
$computer['hardware']['audioCard']['brands'] = array('Realtek', 'Creative Labs', 'ASUS', 'M-Audio');
$computer['hardware']['memoryRAM']['brands'] = array('Kingston', 'Crucial', 'Corsair');

//require_once 'ścieżka do pliku';

class ComputerShop {

    private $hardwareType;
    private $motherboard;

    public function __construct($hardwareType) { //todo: Parametry domyślne głównego konstruktora
        $this->hardwareType = new ComputerHardware($hardwareType);
        $this->motherboard = new ComputerMotherboards();

        $this->userComputerType = $computerHardware->ShowComputerType();
    }
    
    public function ShowMyDremComputer() {
//        return string
    }

}

class ComputerHardware {

    private $type = array('notebook' => 'laptop', 'tower_PC' => 'stacjonarka');
    protected $userType;
    protected $userMotherboardBrand;

    public function __construct($index) {
        $this->userType = $this->type[$index];
    }

    public function ShowComputerType() {
        return $this->userType;
    }

//    protected $protectedField;
//    public $publicField;
//    private $privateField;
//    
//    static $staticField;
}

//$myLaptop = new ComputerHardware();
//echo $myLaptop->userType;
//ComputerHardware::staticField;
//$hardware = new ComputerHardware();
//echo $hardware->protectedField; // error
//echo $hardware->publicField; //true
//echo $hardware->privateField; //error

class ComputerMotherboards {

    private $motherboardBrands = array('MSI', 'ASUS', 'Gigabyte', 'Samsung');
    public $userMotherd;

    public function __construct($motherboardNumber) {
        $this->userMotherboard = $this->motherboardBrands[$motherboardNumber];
    }

}

$computerMotherboard = new ComputerMotherboards('notebook');
echo $computerMotherboard->ShowComputerType();

$computerMorherboards = new ComputerMotherboards();

//echo $computerMorherboards->ExampleMethod(); //true
//echo $computerMotherboards->privateField(); //error

class ComputerAudioCard {
    
}

class ComputerMemory {
    
}
