<?php
class ManipulateData
{
	
}
class ManipulateString
{
	public function __construct($string)
	{
		$this->$string = $string;
	}
	public $string;
	public function OwnSubString()
	{
		
	}
	
	public function OwnStrReplace()
	{
		
	}
	
    public function GetStringLength($string)
	{
			for ($i=0;isset($string[$i]); $i++)
		{
			
		}
		return $i;
	}
	
}
$alamakota = 'ala ma psa';

$stringManipulator = new ManipulateString($alamakota);

$stringManipulator->GetStringLength($alamakota);