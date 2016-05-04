<?php

class Zamiana
{
    public function zamien($string)
    {
        $result = '';
        for($i=0; $i<strlen($string); $i+=2)
        {
            $result .= $string[$i+1] . $string[$i];        
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


$instancja = new spacja();
echo $instancja->FormatNrKonta($instancja->zamien('2332465645'),4);



//--------------------------------
/*
class Zamiana
{
    function zamien($string)
    {
        $result = '';
        for($i=0; $i<strlen($string); $i+=2)
        {
            $result .= $string[$i+1] . $string[$i];        
        }//for
        return $result;
    }//fun
}//class
 
class Spacja extends Zamiana
{
    function FormatNrKonta($nrkonta, $n)
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
     
    $result = $this->zamiana($result);        
    return $result;
    }//fun
   
}//class
 
 
$instancja = new Zamiana();
echo $instancja->zamien('alaa');

//---------------------------------------------

//Enter your code here, enjoy!


class Zamiana
{
    public function Zmien($string)
    {
        return $string.' ';
    }//fun
}//class

class Spacja extends Zamiana
{
    public function FormatNrKonta($AccountNumber, $n=2)
    {
        $result = '';
        for ($i = 0; $i < strlen($AccountNumber); $i +=$n) {
            $GetPart = substr($AccountNumber, $i, $n);
            $result .= $this->Zmien($GetPart);
        }

        return $result;
    }//fun

}//class


$instancja = new Spacja();
echo $instancja->FormatNrKonta('12113214324');
*/