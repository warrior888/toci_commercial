<?php

class PerlaComputerShop {

    private $hardwareType;
    private $motherboard;
    private $audiocard;
    private $memory;

    public function __construct($hardwareType, $motherbrand, $audiobrand, $memorybrand) {
        $this->hardwareType = new ComputerHardware($hardwareType);
        $this->motherboard = new ComputerMotherboards($motherbrand);
        $this->audiocard = new ComputerAudioCard($audiobrand);
        $this->memory = new ComputerMemory($memorybrand);
    }
    
    public function ShowMyDremComputer() {
		return "\n".'Twoj wymarzony komputer to: '.$this->hardwareType->ShowComputerType()."\n"
		.'Plyta glowna: '.$this->motherboard->ShowMotherboard()."\n"
		.'Karta dzwiekowa: '.$this->audiocard->ShowAudioCard()."\n"
		.'Pamiec ram: '.$this->memory->ShowMemory()."\n";
    }

}

class ComputerHardware 
{

    private $type = array('notebook' => 'laptop', 'tower_PC' => 'stacjonarka');
    protected $userType;
    protected $userMotherboardBrand;

    public function __construct($index) {
        $this->userType = $this->type[$index];
    }

    public function ShowComputerType() {
        return $this->userType;
    }

}

class ComputerMotherboards 
{

    private $motherboardBrands = array('MSI', 'ASUS', 'Gigabyte', 'Samsung');
    public $userMotherboard;

    public function __construct($motherboardNumber) {
        $this->userMotherboard = $this->motherboardBrands[$motherboardNumber];
    }
    
    public function ShowMotherboard(){
    	return $this->userMotherboard;
    }

}

class ComputerAudioCard 
{
    
	protected $audioCardBrands = array('Realtek', 'Creative Labs', 'ASUS', 'M-Audio');
	public $userAudioCard;
	
	public function __construct($audiobrand){
		$this->userAudioCard = $this->audioCardBrands[$audiobrand];
	}
	
	public function ShowAudioCard() {
		return $this->userAudioCard;
	}
}

class ComputerMemory 
{
	protected $memoryBrands = array('Kingston', 'Crucial', 'Corsair');
	public $userMemory;
	
	public function __construct($mbrand){
		$this->userMemory = $this->memoryBrands[$mbrand];
	}
	
	public function ShowMemory(){
		return $this->userMemory;
	}
    
}


$mojkomputer = new ComputerShop('notebook', 2, 0, 0);
echo $mojkomputer->ShowMyDremComputer();

$mojkomputer2 = new ComputerShop('tower_PC', 1, 3, 2);
echo $mojkomputer2->ShowMyDremComputer();