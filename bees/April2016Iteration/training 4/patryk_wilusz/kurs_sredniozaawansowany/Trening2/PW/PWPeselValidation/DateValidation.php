<?php

class DateValidation {
    public function MonthValidation($month) {
        $monthValidation = false;
        for($i=0; $i <= 80; $i+=20)
        {
            if($month > $i && $month <= 12+$i)
            {
                $monthValidation = $month-$i;
            }
        }
        return $monthValidation;
    }
    
    public function DayValidation($year, $month, $day) {
        $dayInMoth = $this->DayInMonth($month);
        if($month == 2 && $this->IsLeapYear($year)) 
        {
            if($day <= 29)
            {
                return true;
            }
        }
        else
        {
            if($day <= $dayInMoth)
            {
                return true;
            }
        }
        return false;
    }
    
    private function IsLeapYear($year) {
        $year = $year % 4;
        return ($year > 0) ? 0 : 1;
    }
    
    private function DayInMonth($month) {
        switch($month) 
        {
            case 1:
            case 3:
            case 5:
            case 7:
            case 8:
            case 10:
            case 12:
                return 31;
                break;
            case 2:
                return 28;
                break;
            default:
                return 30;
        }
    }
}