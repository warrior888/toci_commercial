<?php

class ComputerShop {
    private $userType;
    private $userMotherboard;
    private $userVideoCard;
    private $userAudioCard;
    private $userMemoryRAM;
    
    public function __construct($type, $motherboard, $videoCard, $audioCard, $memoryRAM) {
        $this->userType = new ComputerType($type);
        $this->userMotherboard = new ComputerMotherboard($motherboard);
        $this->userVideoCard = new ComputerVideoCard($videoCard);
        $this->userAudioCard = new ComputerAudioCard($audioCard);
        $this->userMemoryRAM = new ComputerMemoryRAM($memoryRAM);
    }
    
    public function ShowMyDreamComputer() {
        return 
                $this->userType->Show()."\n".
                $this->userMotherboard->Show()."\n".
                $this->userVideoCard->Show()."\n".
                $this->userAudioCard->Show()."\n".
                $this->userMemoryRAM->Show();

    }
}

class ComputerType {
    private $type = array("Notebook", "Tower PC");
    private $userType;
    
    public function __construct($type) {
        $this->userType = $this->type[$type];
    }
    
    public function Show() {
        return $this->userType;
    }
}

class ComputerMotherboard {
    private $motherboard = ['MSI', 'ASUS', 'Gigabyte', 'Samsung'];
    private $userMotherboard;
    
    public function __construct($motherboard) {
        $this->userMotherboard = $this->motherboard[$motherboard];
    }
    
    public function Show() {
        return $this->userMotherboard;
    }
}

class ComputerVideoCard {
    private $videoCard = ['Nvidia', 'Radeon'];
    private $userVideoCard;
    
    public function __construct($videoCard) {
        $this->userVideoCard = $this->videoCard[$videoCard];
    }
    
    public function Show() {
        return $this->userVideoCard;
    }
}

class ComputerAudioCard {
    private $audioCard = ['Realtek', 'Crative Labs', 'ASUS', 'M-Audio'];
    private $userAudioCard;
    
    public function __construct($audioCard) {
        $this->userAudioCard = $this->audioCard[$audioCard];
    }
    
    public function Show() {
        return $this->userAudioCard;
    }
}

class ComputerMemoryRAM {
    private $memoryRAM = ['Kingston', 'Crucial', 'Corsair'];
    private $userMemoryRam;
    
    public function __construct($memoryRAM) {
        $this->userMemoryRam = $this->memoryRAM[$memoryRAM];
    }
    
    public function Show() {
        return $this->userMemoryRam;
    }
}

$computer = new ComputerShop(0, 1, 1, 2, 2);
echo $computer->ShowMyDreamComputer();