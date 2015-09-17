<?php
/*
 * Created on 13-09-2015
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 
 
 class SummaryExam{
 	public $elementNumber;
 	public $fn;
 	public $tab;
 	public $n;
 	public $m;
 	public function __construct($fibonacciElement=11, $n=0, $m=100)
 	{
		$this->	modulo9($n, $m);
		$this->	fibonacci($fibonacciElement);
 	}
 	 	
 	public function modulo9($n, $m)
 	{
 		$this->tab = array();
		$index = $n;
		$i = 0;
		if (($n ==0) && ($m ==0)){
			echo "Nieprawidłowe dane wejsciowe";
			return 0;
		}
		echo "Liczby podzielne przez 9 z zakresu od "  .$n .' do ' . $m . " to: ";
		while ($index < $m)
		{
		
		if ($index % 9 === 0){
			$this->tab[$i]=$index;
			$i++;
			echo "\n". $index;
			}
		$index++;
		}
		return $this->tab;
	}
	
 	public function fibonacci($fibonacciElement)
 	{
 		$this->elementNumber = $fibonacciElement;
		if ($fibonacciElement === 0){
		return 0;
	}
		else 
		{
			if ($fibonacciElement === 1|$fibonacciElement === 2){
				return 1;
			}
			else {
				$a = 0;
				$b = 1;
				$this->fn =0;
				for($i=1; $i<$fibonacciElement; $i++){
					$this->fn = $a+$b;
					$a = $b;
					$b = $this->fn;
					}
				}
			echo "\r\n".$fibonacciElement. " element ciagu Fibonacciego to: ".$this->fn;	
			return $this->fn;
			}
 	}
 	 	
 	public function SaveToFile()
 	{
 		$examfile = fopen("SummaryExamResult.txt","w") or die ("unable to open file");
 		fwrite($examfile, "Zadanie 1.\r\nLiczby podzielne przez 9: ");
 		foreach($this->tab as $value){
 				$tmp = "\r\n" . $value;
 		 		fwrite($examfile, $tmp);
 			}
 		$tmp = $this->fn;
 		$nb = $this->elementNumber;
 		fwrite($examfile,"\r\nZadanie 2.\r\n".$nb." element ciagu Fibonacciego to: ". $tmp);
 		fclose($examfile);
 	 	}
 }
  
$summaryExam = new SummaryExam();
$summaryExam -> SaveToFile();
 
?>

