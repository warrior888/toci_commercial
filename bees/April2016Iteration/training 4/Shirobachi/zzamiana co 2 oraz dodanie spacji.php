<?php

class Zamiana
{
    public function zamien($string)
    {
        $result = '';
        for($i=0; $i<strlen($string); $i+=2)
        {
            if(isset($string[$i+1]))
            {
                $result .= $string[$i];  
            }
            $result .= $string[$i];
        }//for
        return $result;
    }//fun
}//class

class Spacja extends Zamiana
{
    public function FormatNrKonta($nrkonta, $n)
    {
        $result = '';
        
        for($i=0; $i<strlen($nrkonta); $i++)
        {
            $result .= $nrkonta[$i];
            if($i % $n == $n-1)
            {
                $result .= " ";
            }//if
        }//for
     
	return $result;
    }//fun
    
}//class

class dzaialaniananrkonta extends spacja
{    
    public function doublefun($string, $n)
    {
        $result = '';
        $result = $this->zamien($string);
         
        return $this->FormatNrKonta($result, 4); 
    }//fun
}//class


$instancja = new dzaialaniananrkonta;
echo $instancja->doublefun('32165413164318419613',4);