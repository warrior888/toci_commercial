<?php

	// function 
	
	// var $cokolwiek
	
	//$dupa = 3;
	
	
	class mebel
	{
		
	}
	
	class stol extends mebel
	{
		function iloscNog()
		{
			return 4; // 135
		}
		
		function blat()
		{
			
		}
	}
	
	class krzeslo extends stol
	{
		function oparcie()
		{
			//$this->
		}
	}

	class PrzelewBankowy extends OperacjaBankowa
	{
		
		function RozpoznajBank($nrKonta)
		{
			if ($this->WalidujNrKonta($nrKonta))
			{
				
			}
		}
	}
	
	
	class PrzelewBankowyIng extends PrzelewBankowy
	{
		var $wartosc;
		
		function PrzelejPieniadze()
		{
			//$this->wartosc = 3;
			
			return '47328524899678437863';
		}
	}
	
	class Przyklad extends PrzelewBankowyIng
	{
		
	}
	
	
	class OperacjaBankowa
	{
		function WalidujNrKonta($nrKonta)
		{
			return strlen($nrKonta) == 26;
		}
	}
	
		
	$instancjaObiektuLol = new PrzelewBankowyIng();
	
	echo $instancjaObiektuLol->PrzelejPieniadze();
	
	