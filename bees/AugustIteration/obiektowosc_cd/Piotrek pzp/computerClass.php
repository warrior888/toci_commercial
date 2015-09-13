<?php
        $computer['type'] = array('laptop', 'tower PC');
        $computer['hardware']['motherboard']['brands'] = array('MSI', 'ASUS', 'Gigabyte', 'Samsung');
        $computer['hardware']['videoCard']['brands'] = array('Nvidia', 'Radeon');
        $computer['hardware']['audioCard']['brands'] = array('Realtek', 'Creative Labs', 'ASUS', 'M-Audio');
        $computer['hardware']['memoryRAM']['brands'] = array('Kingston', 'Crucial', 'Corsair');


class ComputerShop 
{
    public $hardwareType;
    public $motherboard;
    public $audioCard;
    public $videoCard;
    public $memoryRAM;


    public function __construct($audio = 0, $hardwar = 'towerPC', $memory = 0, $motherB = 0,$video = 0) 
     { //todo: Parametry domyślne głównego konstruktora
       
        $this->audioCard = new ComputerAudioCard($audio);
        $this->hardwareType = new ComputerHardware($hardwar);
         $this->memoryRAM = new ComputerMemory($memory);
        $this->motherboard = new ComputerMotherboards($motherB);
        $this->videoCard = new ComputerVideoCard($video);
       
        
       
//        $this->userComputerType = $computerHardware->ShowComputerType();
    }
    
    public function ShowMyDreamComputer() 
    {
          echo 'My dream computer brand is: '. $this->hardwareType->userType. "<br>";
          echo 'My dream motherboard brand is: '. $this->motherboard->userMotherboard. "<br>";
          echo 'My dream audiocard brand is: '. $this->audioCard->userAudio. "<br>";
          echo 'My dream videocard brand is: '. $this->videoCard->userVideo. "<br>";
          echo 'My dream meomory RAM brand is: '. $this->memoryRAM->userMemory. "<br>";
          
    }
}
class ComputerHardware 
{
    public $type = array('notebook' => 'laptop', 'towerPC' => 'stacjonarka');
    public $userType;
    
    /*protected $userMotherboardBrand;
    protected $userAudioCardBrand;
    protected $userMemoryRAMBrand;
    protected $userVideoCardBrand;*/


    public function __construct($index)
    {
        $this->userType = $this->type[$index];
    }
    
}

class ComputerMotherboards 
{
    public $motherboardBrands = array('MSI', 'ASUS', 'Gigabyte', 'Samsung');
    public $userMotherboard;
    
    public function __construct($motherboardNumber) 
    {
        $this->userMotherboard = $this->motherboardBrands[$motherboardNumber];
    }
}

//$computerMotherboard = new ComputerMotherboards('notebook');
//echo $computerMotherboard->ShowComputerType();
//$computerMorherboards = new ComputerMotherboards();

class ComputerAudioCard 
{
    public $audioCardBrands = array('Realtek', 'Creative Labs', 'ASUS', 'M-Audio');
    public $userAudio;
    
    public function __construct($audioCardNumber) 
    {
         $this->userAudio = $this->audioCardBrands[$audioCardNumber];
    }
    
}

class ComputerMemory 
{
    public $memoryRAMBrands = array('Kingston', 'Crucial', 'Corsair');
    public $userMemory;
    
    public function __construct($memoryRAMNumber) 
    {
        $this->userMemory = $this->memoryRAMBrands[$memoryRAMNumber];
    }
}

class ComputerVideoCard
{
    public $videoCardBrands = array('Nvidia', 'Radeon');
    public $userVideo;
    
    public function __construct($videoCardNumber) 
    {
        $this->userVideo = $this->videoCardBrands[$videoCardNumber];
    }
}

$myComputer = new ComputerShop();
echo $myComputer->ShowMyDreamComputer();


