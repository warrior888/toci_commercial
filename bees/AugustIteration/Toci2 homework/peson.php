<?php

class Person {


public $hands;
public $eyes;
public $ears;

public function Talk ($words)
{

if ($words = 'abecadło')
	{
	return 'Mowa';
	}
else
	{
	return 'Niemowa';
	}

}

$Piotrek = new Person();
$Piotrek -> hands = 4;
$Piotrek -> eyes = 3;
$Piotrek -> ears = 0;

echo $Piotrek-> hands;
echo $Piotrek-> eyes;
echo $Piotrek-> ears;










}