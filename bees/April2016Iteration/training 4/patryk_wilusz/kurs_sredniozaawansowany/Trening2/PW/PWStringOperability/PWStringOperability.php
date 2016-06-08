<?php
set_include_path(get_include_path() . PATH_SEPARATOR . 'E:\php\PW\kurs_sredniozaaw\Trening2\PW\PWPeselValidation');
require_once 'StringOperability.php';

class PWComplexStrings extends PWStringOperability {
    protected $_stringOperation;
    
    public function __construct() {
        $this->_stringOperation = new StringOperability();
    }
    
    private function HelpIsStringInString($subject, $seek)
    {
        $lengthseek = $this->_stringOperation->StringLength($seek);
        for($i=1; $i < $lengthseek; $i++)
        {
            if(!isset($subject[$i]))
            {
                return false;
            }
            else
            {
                if($subject[$i] != $seek[$i])
                {
                    return false;
                }
            }
        }
        return true;
    }
    
    protected function IsStringInString($subject, $seek)
    {
        $lengthsub = $this->_stringOperation->StringLength($subject);
        for($i=0; $i < $lengthsub; $i++)
        {
            if($subject[$i] == $seek[0])
            {
                if($this->HelpIsStringInString($this->SubString($subject, $i), $seek))
                {
                    return true;
                }
            }
        }
        return false;
    }
    
    protected function IsStringLettersInString($subject, $seek)
    {
        $lengthsub = $this->_stringOperation->StringLength($subject);
        $seek = str_split($seek, 1);
        for($i=0; $i < $lengthsub; $i++)
        {
            for($j=0; isset($seek[$j]); $j++)
            {
                if($subject[$i] == $seek[$j])
                {
                    unset($seek[$j]);
                    sort($seek);
                    break;
                }
            }
            if(empty($seek))
            {
                return true;
            }
        }
        return false;
    }
    
    protected function IsAnagram($subject, $seek)
    {
        if($this->_stringOperation->StringLength($subject) == $this->_stringOperation->StringLength($seek))
        {
            return $this->IsStringLettersInString($subject, $seek);
        }
        return false;
    }
    
    public function CheckStrings($subject, $seek) 
    {
        return array($this->IsStringInString($subject, $seek), $this->IsStringLettersInString($subject, $seek), $this->IsAnagram($subject, $seek));
    }
}

$string = new PWComplexStrings();
var_dump($string->CheckStrings('beata', 'ataeb'));

