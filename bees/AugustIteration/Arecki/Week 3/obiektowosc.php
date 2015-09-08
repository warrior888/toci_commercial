<?php

    class Car {
    
    public $speed; //predkosc maksymalna
    public $gearbox;
    public $numberOfWheels;
    public $numberOfGears;
    public $horsePower;
        
    public function Move($speed) {
      
        if ($speed > $this->speed) { //$speed != $this->speed
            return 'Engine error';
        }
        
        $mnoznik = $this->horsePower/10;
        
        $wynik = $speed / $mnoznik;
        
        echo 'Samochod rozpedza sie do predkosci ' . $speed . ' km/h w ciagu ' . (int)$wynik . ' sekund.';
        
    } // koniec funkcji Move()
    
        
    } // koniec klasy Car

//Audi

$Audi = new Car();

$Audi->gearbox = "Manual";
$Audi->numberOfWheels = 4;
$Audi->numberOfGears = 6;
$Audi->speed = 320;
$Audi->horsePower = 360;

$Audi->Move(100);


//Volswagen


$VW = new Car();

$VW->gearbox = "Manual";
$VW->numberOfWheels = 3;
$VW->numberOfGears = 4;
$VW->speed = 196;
$VW->horsePower = 120;

/*echo $VW->gearbox."\n";
echo $VW->numberOfWheels."\n";*/

//BMW

$BMW = new Car();

$BMW->speed = 170;
$BMW->gearbox = "TipIronic";
$BMW->numberOfWheels = 4;
$BMW->numberOfGears = 7;
$BMW->horsePower = 240;

/*echo $BMW->gearbox."\n";
echo $BMW->numberOfWheels."\n";
echo $BMW->numberOfGears."\n";
echo $BMW->speed."\n";*/


//var_dump ($BMW->speed);

?>