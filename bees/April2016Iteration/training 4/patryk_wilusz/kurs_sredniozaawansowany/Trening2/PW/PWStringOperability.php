<?php
//require_once '../main/001.php';
class PWStringOperability extends CheckStringOperability {
    public function StringLength($text) {
        for($i=0; isset($text[$i]); $i++) {}
        return $i;
    }
    
    public function SubString($text, $start, $lenght = NULL) {
        $str_len = $this->StringLength($text);
        if($start < 0)
        {
            $start = $str_len-abs($start);
        }
        if(!isset($lenght)) 
        {
            $lenght = $str_len-abs($start);
        }
        else if($lenght < 0)
        {
            $lenght = $str_len-abs($start)-abs($lenght);
        }

        $substring = '';
        for($i = $start; $i <= $start+$lenght-1; $i++)
        {
            if (isset($text[$i])){
                $substring .= $text[$i];
            }
        }
        return $substring;
    }
    
    public function GetNick() {
        return 'PatrykWilusz';
    }
}