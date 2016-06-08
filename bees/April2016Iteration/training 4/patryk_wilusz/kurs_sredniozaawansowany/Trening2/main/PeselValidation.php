<?php

abstract class PeselValidation {
    protected abstract function DateValidation($year, $month, $dey);
    protected abstract function CutOffDate($pesel);
    protected abstract function CheckSum($pesel);
    public abstract function ValidatePesel($pesel);
    
}