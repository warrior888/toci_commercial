<?php
class SummaryExam {
    
    public $fibonacciElement;
    public $m;
    public $n;
    public $div;
    public $fibo;
    

    public function __construct($fibonacciElement=5,$n=0,$m=100)
    {
         $this->fibonacciElement = $fibonacciElement;
         $this->m = $m;
         $this->n = $n;
         $this->div = $this->Division();
         $this->fibo = $this->Fibonacci($fibonacciElement);   
         $this->SaveToFile();
    }

    public function SaveToFile()
    {
        
        $data = ' Liczby podzielne przez 9 to: ';
        foreach ($this->div as $number)
        {
            $data.=$number.' ';
        }
        $data.=PHP_EOL;
        $data.=' Wyniki ciagu fibonacciego to: ';
        $data.=$this->fibo;
        //file_put_contents('d:/Programowanie/SummmaryExamResult.txt', $data);
        
       /*$saveToFile = "d:\Programowanie|SummmaryExamResult.txt";
        $save = fopen($saveToFile, "w");
        fputs($save,$data);
        fclose($saveToFile);*/
    }

    public function Division()
	{
	$tablica = [];
        
		while ($this->n<=$this->m) 
		{
			if ($this->n%9==0)
			{
			 $tablica[]=$this->n;
			 
			}
			$this->n++;
		}
		foreach($tablica as  $result)
		{
                      $result.' Jest podzilene przez 9: '."<br>";
		}
                return $tablica;
	}
	
	public function Fibonacci($fibonacciElement) // $sequenceNr = 0,1,1,2,3...n
	{
		if($fibonacciElement < 0) //error detection
		{
			return "error " ;
		}
		else if($fibonacciElement <= 2)
		{
			return 1;
		}
		else
		{	
			$a = 0; 
			$b = 1;
			
			for($i=3; $i<= $fibonacciElement; $i++)
			{
				$c=$b; //F[n]=F[n-1]+F[n-3]
				$b=$b+$a;
				$a=$c;
			}
                        return $b;
		}
			
	}
}
 $x = new SummaryExam();
//echo $x->Fibonacci()."<br>";
//$y = new SummaryExam();
// $x->Division(0,100);