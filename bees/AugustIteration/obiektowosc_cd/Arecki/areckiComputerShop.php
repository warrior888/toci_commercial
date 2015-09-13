<?php

//require_once 'ścieżka do pliku';

class ComputerShop {

    private $hardwareType;
    public $motherBoard;
    public $audioCard;
    public $memory;

    public function __construct() { //todo: Parametry domyślne głównego konstruktora
          
    }
    
    public function ShowMyDreamComputer() {
       
    }

}


// Klasa dotycząca rodzaju komputera

class ComputerHardware {

    private $type = array('notebook' => 'Laptop', 'Tower_PC' => 'stacjonarka');
    
    public $userType;

    public function __construct($index) {
        $this->userType = $this->type[$index];
    }
}

// Klasa dotycząca marki płyty głównej

class ComputerMotherboards {

    private $motherboardBrands = array('MSI', 'ASUS', 'Gigabyte', 'Samsung');
    public $userMotherboard;

    public function __construct($motherboardNumber) {
        $this->userMotherboard = $this->motherboardBrands[$motherboardNumber];
    }
    
}

// Klasa dotycząca marki karty dzwiękowej

class ComputerAudioCard {
    
    private $audioCardBrands = array('Realtek', 'Creative Labs', 'ASUS', 'M-Audio');
    public $userAudioCard;
    
    public function __construct($audioCardNumber) {
        $this->userAudioCard = $this->audioCardBrands[$audioCardNumber];
    }
    
}

// Klasa dotycząca marki pamięci

class ComputerMemory {
    
    private $memoryBrands = array('Kingston', 'Crucial', 'Corsair');
    public $userMemory;
    
    public function __construct($memoryNumber) {
        $this->userMemory = $this->memoryBrands[$memoryNumber];
    }
    
}

// Wywolanie na ekran poszczegolnych elementow

$computerType = new ComputerHardware('notebook');
echo $computerType->userType . "\n"; 

$computerMotherBoard = new ComputerMotherboards(0);
echo $computerMotherBoard->userMotherboard . "\n"; 

$computerAudioCard = new ComputerAudioCard(0);
echo $computerAudioCard->userAudioCard . "\n"; 

$computerMemoryBrand = new ComputerMemory(0);
echo $computerMemoryBrand->userMemory . "\n"; 
