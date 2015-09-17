<?php

class SummaryExam
{
    private $tablica = array();
    private $wynikFibonacci;

    public function __construct($fibonacciElement, $n, $m)
    {
        $this->while9($n, $m);
        $this->fibonacciFor($fibonacciElement);
    }


    public function while9($n, $m)
    {

        $x = $n;

        while ($x <= $m) {
            if ($x % 9 === 0) {
                $this->tablica[] = $x;
                $x += 9;
            } else {
                $x++;
            }
        }
    }

    public function fibonacciFor($wyraz)
    {
        if ($wyraz < 2) {
            $this->wynikFibonacci = $wyraz;
        }

        for ($a = 0, $b = 1, $i = 0; $i < $wyraz; $b += $a, $a = $b - $a, $i++) {
            $this->wynikFibonacci = $b;
        }
    }

    public function saveToFile()
    {
        $plik = fopen("plik.txt", "w");
        fputs($plik, 'Liczy podzielne przez 9 z podanego zakresu: '
            . implode(",", $this->tablica) . "\r\n" .
            'Szukany wyraz ciagu wynosi: ' . $this->wynikFibonacci);
        fclose($plik);
    }
}

$example = new SummaryExam(13, 2, 100);
$example->saveToFile();