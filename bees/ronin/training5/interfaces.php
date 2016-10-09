<?php

	interface IUser
	{
		public function GetNameSurname();
	}
	
	interface IMachineUser 
	{
		public function AddMachine(IMachine $machine);
	}
	
	interface IAnimalUser
	{
		public function AddAnimal(IAnimal $machine);
	}
	interface IMachine
	{
		public function GetName();
	}
	interface IAnimal
	{
		
	}
	interface IPurchase
	{
		
	}
	
	interface IBasket
	{
		
	}
	class FacebookUser implements IUser
	{
		
	}
	
	class Machine implements IMachine
	{
		
	}
	
	class User implements IUser, IMachineUser, IAnimalUser
	{
		public function AddMachine(IMachine $machine)
		{
			$machine->GetName();
		}
	}
	
	$user = new User();
	
	$user->AddMachine(new Machine());