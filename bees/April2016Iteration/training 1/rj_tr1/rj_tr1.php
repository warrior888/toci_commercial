<?php

$wiek = 18;

if ( $wiek>6 && $wiek<14 ){
    echo 'podstawowka';
}elseif ( $wiek>=14 && $wiek<19 ){
    echo 'szkola srednia';
}elseif ( $wiek>=19 && $wiek<23 ){
    echo 'studia';
}elseif ( $wiek>=23 && $wiek<=67 ){
    echo 'praca';
}else{
    echo 'emerytura';
}
