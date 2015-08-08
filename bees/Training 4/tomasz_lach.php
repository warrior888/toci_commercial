<?php



abstract class Account
{

}

class BankAccount extends Account
{
	private $accountNumber ='';
	private $space_place = '';

	public function __create($accNum)
	{
		$this->accountNumber = $accNum;
		$this->space_place = 4;
	}



	function insertSpace()
	{
		$index = 0;
		$output = "";
		for($i=0; $i<strlen($this->accountNumber); $i++)
		{
			$output .=$accNumber[$i];
			if ($i % $this->space_place == ($this->space_place-1))
			{
				$output .=" ";
			}
		}

		return $output;
	}
}

class IngAccountNumber extends BankAccount
{
	private $jump =2;

	function swapPlace()
	{
		$output = $this->$accountNumber;
		$temp = "";
		for($i=0; $i<strlen($output);$i++)
		{
			if($i % $this->jump == 0)
			{
				$temp = $output[$i];
				$output[$i] = $output[$i+($this->jump-1)];
				$output[$i+($this->jump-1)] = $temp;
			}
		}
		return $output;
	}



	function insertAndSwap()
	{
		return insertSpace(swapPlace($accountNumber));
	}



}