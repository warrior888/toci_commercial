<?php

interface AbleToSleep
{
  public function sleep();
}

abstract class Human implements AbleToSleep
{
    private $_name;
    
    public function __construct($name) {
        $this->_name = $name;
    }
    
    public function sleep() { return 'Ja '.$this->_name.' ide spac'."\n";}
    public function eat() {/*...*/}

    public function getName() {
       echo $this->_name;
    }
    
    abstract public function doStuff();
}

class Man extends Human
{
  public function __construct($name) {
      parent::__construct($name);
  }

  public function doStuff() {/*...*/}
}

class Woman extends Human
{
  //private $_pregnanciesNumber;
  public function doStuff() {/*...*/}
}

class Bed
{
  public function usee(AbleToSleep $user)
  {
    return $user->sleep();
  }
}

$Arek = new Man('Arek');
$Ania = new Man('Ania');
//echo $Arek->getName();
$lozko1 = new Bed();
echo $lozko1->usee($Arek);
echo $lozko1->usee($Ania);
echo $lozko1->usee($Arek);