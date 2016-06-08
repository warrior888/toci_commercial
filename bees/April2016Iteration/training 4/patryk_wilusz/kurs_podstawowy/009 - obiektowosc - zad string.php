<?php
class ManipulateString
{
    public function __construct($string)
    {
        $this->string = $string;
    }
    public $string;
    
    public function OwnStrRev()
    {
		$tekst = '';
        $lenght = $this->GetStringLenght();
		for($i = $lenght-1; $i >= 0; $i--)
		{
			$tekst .= $this->string[$i];
		}
		
		return $tekst;
    }
    
    public function OwnSubString($start, $length = Null)
    {
		if($start < 0) {
			$start = $this->GetStringLenght()+$start;
		}
        
		if(!isset($length)) {
			$length = $this->GetStringLenght();
		} elseif($length < 0) {
			$length = $this->GetStringLenght()+$length-$start;
		}
	
		$tekst = "";
		for($i = $start; $i <= ($start+$length-1); $i++)
		{
			if(isset($this->string[$i])) $tekst .= $this->string[$i];
		}
		return $tekst;
    }
    
    public function GetStringLenght()
    {
        for($i=0; isset($this->string[$i]); $i++){}
        return $i;
    }
}

$alamakota = 'ALAA';
$stringManipulator = new ManipulateString($alamakota);
echo $stringManipulator->GetStringLenght()."\n";
echo $stringManipulator->OwnSubString(3)."\n";
echo $stringManipulator->OwnStrRev();