<?php

//require_once 'ścieżka do pliku';

class ComputerShop {

    public $computerType;
    public $computerMotherBoard;
    public $computerAudioCard;
    public $computerMemoryBrand;

    
    public function __construct($hard='notebook',$moth=0,$audio=0,$memo=0) { 
          
        $this->computerType = new ComputerHardware($hard);
        $this->computerMotherBoard = new ComputerMotherboards($moth);
        $this->computerAudioCard = new ComputerAudioCard($audio);
        $this->computerMemoryBrand = new ComputerMemory($memo);
    }
    
    public function ShowMyDreamComputer() {
        
       return 'Moj wymarzony typ komputera to: '. $this->computerType->userType . "\n" . 
        'Moja wymarzona plyta glowna to plyta marki: ' . $this->computerMotherBoard->userMotherboard . "\n" . 
        'Moja wymarzona karta dzwiekowa to: ' . $this->computerAudioCard->userAudioCard . "\n" . 
        'Moja wymarzona marki pamieci to: ' . $this->computerMemoryBrand->userMemory; 
    }

}

// Klasa dotycząca rodzaju komputera

class ComputerHardware {

    private $type = array('notebook' => 'Laptop', 'tower_PC' => 'Stacjonarka');
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


// Wywolanie wymarzonego komputera:

$myDreamComputerFromComputerShop = new ComputerShop('tower_PC',1,1,1);
echo $myDreamComputerFromComputerShop->ShowMyDreamComputer(); 

