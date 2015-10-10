<?php


//zadanie dom 1 napisac palindrm z for

$text = 'kaaaajaaaak';
$length = strlen($text);

for ( $i = 0 , $j = $length - 1 ;  $i < $j; $i++, $j--) {
    //echo  'I wynosi' . $i . "  " . "J wynosi" . $j . "\n";
    if ($text[$i] == $text[$j]) {
        echo 'To jest palindrom!' . "\n";
}
else {
        echo 'To nie jest palindrom!';
        break;
    }

}       
echo "\n"."\n"."\n";

//odwrotny operator
for ( $i = 0 , $j = $length - 1 ;  $i < $j; $i++, $j--) {
    //echo  'I wynosi' . $i . "  " . "J wynosi" . $j . "\n";
    if ($text[$i] != $text[$j]) {
        echo 'To nie jest palindrom!' . "\n";
        break;
    }
else {
    echo 'To jest palindrom!' . "\n";
    
    }

}
  
    