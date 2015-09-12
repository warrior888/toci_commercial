<?php

use Exception;

define("PI" , 3.14);

class Cylinder
{
  public $_radius;
  public $_height;
  public $_result;
  public $_result1;
  

  public function setHeight($height)
  {
      if(!is_int($height))
      {
          throw new Exception('Height must be a number!');
      }
      
      $this->_height = $height;
  }
 
  public function setRadius($radius)
  {
      if(!is_int($radius))
      {
          throw new Exception('Height must be a number!');
      }
      
      $this->_radius = $radius;
  }
  
  public function getHeight()
  {
      return $this->_height."<br />";
  }

  public function getRadius()
  {
      return $this->_radius . "<br />";
  }
  
  public function Area()
  {
      $this->_result.= 'Height = '.$this->getHeight(). '<br />';
      $this-> _result.='Radius = '.$this->getRadius(). '<br />';
      $this-> _result.= 'Field = '. (2 * PI * $this->getRadius()*($this->getHeight() + $this->getRadius())). '<br />';
  
      echo $this->_result. '<br />';
  }
  
  public function Volume() 
  {
      $this->_result1.= 'Height = '.$this->getHeight(). '<br />';
      $this-> _result1.='Radius = '.$this->getRadius(). '<br />';
      $this-> _result1.= 'Volume = '.(PI*($this->getRadius()*$this->getRadius())*$this->getHeight()).'<br />';
      
      echo $this->_result1;
  }
}
    $obj = new Cylinder();
    $obj->setHeight(10);
    $obj->setRadius(9);
    $obj->Area();
    $obj->Volume();
    


