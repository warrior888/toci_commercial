<?php

set_include_path(get_include_path() . PATH_SEPARATOR . 'E:\php\PW\kurs_sredniozaaw\Trening2\PW\PWPeselValidation');
require_once 'DateValidation.php';
require_once 'StringOperability.php';

class PWPeselValidation {
    
    protected $_dateValidation;
    protected $_stringOperation;
    
    public function __construct()
    {
        $this->_dateValidation = new DateValidation();
        $this->_stringOperation = new StringOperability();
    }
    
    protected function CutOffDate($pesel)
    {
        $date = array();
        $date['year'] = $this->_stringOperation->SubString($pesel, 0, 2);
        $date['month'] = $this->_stringOperation->SubString($pesel, 2, 2);
        $date['day'] = $this->_stringOperation->SubString($pesel, 4, 2);
        return $date;
    }
    
    protected function CheckSum($pesel)
    {
        $numbers = str_split($pesel, 1);
        $weight = array(1, 3, 7, 9, 1, 3, 7, 9, 1, 3);
        for($i=0; $i < 10; $i++)
        {
            $key[$i] = $numbers[$i]*$weight[$i];
        }
        return ((10-array_sum($key)%10)%10 == $numbers[10]) ? true : false;
    }
    
    protected function DateValidation($year, $month, $day)
    {
        $month = $this->_dateValidation->MonthValidation($month);
        if($month)
        {
            return $this->DayValidation($year, $month, $day);
        }
        return false;
    }
    
    public function ValidatePesel($pesel)
    {
        $cutOffDate = $this->CutOffDate($pesel);
        if($this->_dateValidation->DayValidation($cutOffDate['year'], $cutOffDate['month'], $cutOffDate['day']))
        {
            return $this->CheckSum($pesel);
        }
        return false;
    }
}

//84080818074
//$pesel = new PWPeselValidation();
//var_dump($pesel->ValidatePesel('84080818074'));
