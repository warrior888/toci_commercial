<?php

class Car {

    //BMW, Mercedes, Audi, Skoda - $this

    public $speed; // predkosc max
    public $gearbox;
    public $numberOfWheels;
    public $numberOfGears;
    public $horsePower;

    public function Move($speed) {
        
        if ($speed > $this->speed) { // $speed != $this->speed
            return "Engine error!";
        }

        $time = 0;

        for ($i = 1; $i < $speed; $i = $i * 4) { // $i *= 4
            $time = $time + $i; //$time == $time + $i; - bzdura
            echo $time . "\n";
        }

        var_dump($time);
    }

    public function ShowWehicleSpeed() {
        echo $this->speed;
    }

}

//Audi - 320kmph, manual, 4, 6, 450HP

$Audi = new Car();
//uzupełnić proprecje;
echo $Audi->Move(280);

$VW = new Car();

$VW->gearbox = 'Manual';
$VW->numberOfWheels = 3;
$VW->numberOfGears = 4;
// $zmienna = 1 -> int 
// $zmienna2 = 'alamakota' -> string
$VW->speed = "198";

$VW->Move(150);

$BMW = new Car();

$BMW->gearbox = "TipTronic";
$BMW->numberOfWheels = 4;
$BMW->numberOfGears = 7;

//$zmienna1 = 1;
//$zmienna1++;
//$zmienna2 = 2;


echo $VW->numberOfWheels . "\n";
echo $VW->gearbox . "\n"; // "\n" <br/>
//echo $BMW->gearbox."\n";
//echo $BMW->numberOfWheels."\n";
//echo $BMW->numberOfGears."\n";
//var_dump($BMW->speed); -> null

if ($BMW->speed !== true) {
// = - przypisanie
// == - sprawdzenie wartości
// === - sprawdzenie wartości i typu 
// $zmienna = "27"
// if($zmienna == 27) => true
// if($zmienna === 27.0) => false
//    echo 'Nie mam predkosci';
}



// NaN - NaN = 0; - C++

echo $BMW->ShowWehicleSpeed();


$liczba = "27";

if ($liczba == 27.0) {
//    echo 'Równa się!';
}

// false == 0, '', null 


$test = "1";
//var_dump((int) $test);
