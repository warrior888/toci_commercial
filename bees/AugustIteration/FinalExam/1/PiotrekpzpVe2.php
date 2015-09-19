<?php
class SummaryExam {
    
    private $fibonacciElement;
    private $m;
    private $n;
    private $div;
    private $fibo;
    

    public function __construct($fibonacciElement=15,$n=0,$m=100)
    {
         $this->fibonacciElement = $fibonacciElement;
         $this->m = $m;
         $this->n = $n;
         $this->div = $this->DivideByNine();
         $this->fibo = $this->FibonacciNumber($fibonacciElement);   
         $this->SaveToFile();
    }

    public function SaveToFile()
    {
        $file_path = "D:\Programowanie\Piotrekpzp.txt";
        $to_save = ' Results fibonacci number is: '.$this->fibo;
        $to_save .= PHP_EOL;
        
        $to_save .= 'The number divisible by 9 are: ';
        foreach ($this->div as $number)
        {
            $to_save.=$number.' ';
        }
        
        $file = fopen($file_path, 'w');
        fputs($file,$to_save);
        fclose($file);
       
    }

    public function DivideByNine()
	{
	$arrayOfResult= [];
        
		while ($this->n<=$this->m) 
		{
			if ($this->n%9==0)
			{
			 $arrayOfResult[]=$this->n;
			 
			}
			$this->n++;
		}
		foreach($arrayOfResult as  $result)
		{
                      $result;
		}
                return $arrayOfResult;
	}
	
	public function FibonacciNumber($fibonacciElement) // $sequenceNr = 0,1,1,2,3...n
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
$x->SaveToFile();
