<?php

class Creature
{
    public function __construct($primaryToLife = "water")
    {
        $this->needToLife[] = $primaryToLife;
    }
    public $needToLife = array();
}

class Animal extends Creature
{
    public function __construct()
    {
        parent::__construct();
    }
    
}

class Human extends Animal
{
    public function __construct($weight = "75 kg", $height = "173 cm")
    {
        $this->weight = $weight;
        $this->height = $height;
        parent::__construct();
    }
    
    public $height;
    public $weight;
    public $hairColor;
    
    public function ShowWhatItNeedToLife()
    {
        var_dump($this->needToLife);
    }
}

$Bartek = new Human("150 kg");
/*$BartekWeigth = $Bartek -> weight;
$BartekHeigth = $Bartek -> height;

echo 'Waga: '.$BartekWeigth.' Wzrost: '.$BartekHeigth."\n";*/
$Bartek->ShowWhatItNeedToLife();