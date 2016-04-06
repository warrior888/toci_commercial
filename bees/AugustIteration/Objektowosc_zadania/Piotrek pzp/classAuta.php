<?php
    class Car {
    
    
    public $gearbox;
	public $enginePower;
    public $numberOfWheels;
    public $numberOfGears;
    public $speed;   
	
    public function Move($speed) {
      
        if ($speed > $this->speed) { //$speed != $this->speed
            return 'Engine error';
        }
        
        $multiplier = $this->enginePower/25;
        
        $result = $speed / $multiplier;
        
        echo 'Car by engine power '. $this->enginePower . ' accelerates to the speed ' . $speed . ' km/h within ' . $result . ' seconds.'."<br>"."<br>";
        
    } // koniec funkcji Move()
    
        
    } // koniec klasy Car
	//Audi
	
	$Audi = new Car();
	$Audi->gearbox = "Manual";
	$Audi->numberOfWheels = 4;
	$Audi->numberOfGears = 6;
	$Audi->speed = 320;
	$Audi->enginePower = 360;
	$Audi->Move(100);
	$Audi->Move(200);
	
	//BMW
	$BMW = new Car();
	$BMW->speed = 240;
	$BMW->gearbox = "TipIronic";
	$BMW->numberOfWheels = 4;
	$BMW->numberOfGears = 7;
	$BMW->enginePower = 240;
	$BMW->Move(100);
	$BMW->Move(200);
	
	//Volswagen
	$VW = new Car();
	$VW->gearbox = "Manual";
	$VW->numberOfWheels = 3;
	$VW->numberOfGears = 4;
	$VW->speed = 220;
	$VW->enginePower = 120;
	$VW->Move(100); 
	$VW->Move(200); 
	
	//OPEL
	$OPEL = new Car();
	$OPEL->speed = 280;
	$OPEL->gearbox = "TipIronic";
	$OPEL->numberOfWheels = 5;
	$OPEL->numberOfGears = 7;
	$OPEL->enginePower = 420;
	$OPEL->Move(100);
	$OPEL->Move(200);
	
	echo "<br>";
	echo "BMW Specifications: "."<br>";
	echo $BMW->gearbox."<br>";
	echo $BMW->numberOfWheels."<br>";
	echo $BMW->numberOfGears."<br>";
	echo $BMW->speed."<br>";
	echo $BMW->enginePower."<br>";
	//var_dump ($BMW->speed);
?>