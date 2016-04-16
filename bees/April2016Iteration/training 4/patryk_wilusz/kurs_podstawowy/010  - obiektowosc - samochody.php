<?php

class Car 
{
    public $speed;
    public $gearbox;
    public $numberOfWheels;
    public $numberOfGears;
    public $horsePower;
    
    public function Move($speed)
    {
        if($speed > $this->speed)
        {
            return "Engine error!";
        }
        
        $time = 0;
        for($i = 1; $i < $speed; $i*=4)
        {
            $time += $i;
            echo $time."\n";
        }
    }
    
    public function ShowSpeed()
    {
        
    }
    
}

$BMW = new Car();
$BMW->geatbox = "TipTronic";
$BMW->numberOfWheels = 4;
$BMW->numberOfGears = 7;

$VW = new Car();
$VW->geatbox = "Manual";
$VW->numberOfWheels = 3;
$VW->numberOfGears = 4;
$VW->speed = 190;
//$VW->Move(150);

//Audi - 320kmph, 4 koła, 6 biegów, 450hp
$Audi = new Car();
echo $Audi->Move(280);