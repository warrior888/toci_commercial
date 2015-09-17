<?php
class SummaryExam
{
	public $varr1;
	public $varr2;

	public function __construct($fibonacciElement, $n = 0, $m =100){ //$n=0,$m = 100
		$this -> varr1 = $this -> Fibonacci($fibonacciElement);
		$this -> varr2 = $this -> IsDividedByNine($n, $m);
		//$this -> arr = $arr;
	}

	public function IsDividedByNine($n, $m) {


		if (($n == 0) && ($m == 0)){
			return 0;
		}
		if ($m !== 0){
			$arr = array();
			//$string = "Count";
			while ($n <= $m)
			{
				if (($n % 9) == 0){
					//return array($i => $n);
					//$string .=" ". $n;
					$arr[] = $n;
				}
				$n++;

			}
			return $arr;
		}
	}

	public function Fibonacci($fibonacciElement)
	{
		 $a=1;
	     $b=1;
	     $fibonacciElement=$a+$b;
	            for( $i=2; $i<=10; $i++)
	            {
	                return $fibonacciElement;
	                 
	                $fibonacciElement=($a+$b);
	 
	                $a=$b;
	                $b=$fibonacciElement;
	            }
	   // if ($fibonacciElement < 2){
	    //  return $fibonacciElement;
	   // }
	   // else {
	    //   return $this -> Fibonacci($fibonacciElement - 1) + $this -> Fibonacci($fibonacciElement - 2);
	    //}
	}


public function SaveToFile() {
	$fBona ="Ciag Fibonacciego = " . $this -> varr1 . PHP_EOL;
	$fBona .= "liczby podzielne przez 9: ";
	foreach ($this -> varr2 as $value){
		$fBona .= $value . ", ";
	};
	$summaryExamResult ="E:\TOCI\Repo bees\bees\AugustIteration\Ubot (Seba)\SummaryExamResult.txt";
		$create = fopen($summaryExamResult, "w") or die("Unable to open file!");
		fputs($create,$fBona);
		fclose($create);
	}


}

$exam = new SummaryExam(3);
//echo $divideByNine -> IsDividedByNine();
//echo $divideByNine -> Fibonacci();
$exam -> SaveToFile();
