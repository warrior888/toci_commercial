<?php

// Czwartek godzina 18:55 na repo - deadline. 18:55 wrzucamy na repo swoje prace.

// Zad 1 - Wyświetl wszystkie liczby podzielne przez 9 z zakresu [n-m], domyslnie: n=0, m=100 (while loop) i 
// wpisze je do tablicy, którą następnie zwrócisz.
// Zad 2 - Zrób ciąg Fibonacciego (for loop)
// Zad 3 - Powyższe dwa punkty mają być opakowane w klasę SummaryExam, która w konstruktorze będzia miała wartości:
// - wymagane $fibonacciElement (pkt. 2)
// - $n, $m (pkt. 1) 
// Zad 4 - Finalnie w klasie ma być metoda, która wyniki powyższych dwóch funkcji zapisze w pliku SummmaryExamResult.txt

class SummaryExam {

    private $variableOfFibonocci;
    private $variableOfNine;

    public function __construct ($fibonacciElement, $n=0, $m=100) {

        $this->variableOfFibonocci = $this->ciagFibonacciego($fibonacciElement);
        $this->variableOfNine = $this->numbersDivisibleByNine($n, $m);
    }

    public function numbersDivisibleByNine($n, $m) {
       
    $arr = array();
        
    while  ($n <= $m) { 
              
        if ($n % 9 === 0) {
            $arr[] = $n;
        }
        
         $n+=1;
        
    }
        
    return $arr;
}
    
    public function ciagFibonacciego($fibonacciElement) {
        
    if ($fibonacciElement < 2) {
        
        return $fibonacciElement;
        
    } else {
        
        $before = 1;
        $after = 1;
        
        for ($i=3; $i <= $fibonacciElement; $i++) {
        
             $temp = $before + $after;
            $before = $after;
            $after = $temp;
        }
        
      return $after;
        
    }
    
}
    
    public function saveToFile() {
    
        $nazwa_pliku = 'C:\xampp\htdocs\php\Final Exam\SummmaryExamResult.txt';
        $do_zapisania = 'Ciag Fibonacciego: ' . $this->variableOfFibonocci . PHP_EOL;
        $do_zapisania .= 'Liczby podzielne przez 9 to: ';
          
        foreach ($this->variableOfNine as $wynik) {
           $do_zapisania .= $wynik . ' ';
        }
        
        $plik = fopen($nazwa_pliku, 'w');
        fputs($plik, $do_zapisania);
        fclose($plik);
        
    }

} //koniec klasy

$summaryExam = new SummaryExam(12);
$summaryExam -> saveToFile();

/*
$nazwa_pliku = 'C:\xampp\htdocs\php\Final Exam\FinalExam';
$plik = fopen($nazwa_pliku, 'r');
$dane = fread($plik, filesize($nazwa_pliku));
fclose($plik);

echo $dane;*/
