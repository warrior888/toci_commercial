<?php
class SummaryExam {
    private $fib;
    private $range1;
    private $range2;
    
    public function __construct($range1 = 0, $range2 = 100, $fib)
    {
        if(is_numeric($range1) && is_numeric($range2) && is_numeric($fib)) {
            $this->range1 = $range1;
            $this->range2 = $range2;
            $this->fib = $fib;
        } else {
            echo 'Walidacja danych nieudana.';
        }
    }
    
    private function show_number($range = 0, $range2 = 100) {
        $result = [];
        while ($range < $range2) {
            if($range % 9 == 0) {
                $result[] = $range;
            }
            $range++;
        }
        return $result;
    }
    
    private function fibb($number) {
        $a = 1; $b = 0;
        for($i = 0; $i < $number; $i++) {
            $b += $a;
            $a = $b-$a;
        }
        return $b;
    }
    
    public function show_results() {
        $show_number = $this->show_number($this->range1, $this->range2);
        $result = '';
        foreach($show_number as $value) {
            $result .= $value . ' | ';
        }
        if(isset($this->fib)) {
            return 
                'Liczby z zakresu ['.$this->range1.'-'.$this->range2.'] podzielne przez [9]: '.$result."\r\n".
                '['.$this->fib.'] wyraz ciagu fibonacciego: '.$this->fibb($this->fib);
            }
            else {
                return 'Niepoprawne dane.';
            }
                
    }
}

$maths = new SummaryExam(1, 'aa', 6);
$file = fopen('SummaryExamResult.txt', 'w');
fwrite($file, $maths->show_results());
fclose($file);