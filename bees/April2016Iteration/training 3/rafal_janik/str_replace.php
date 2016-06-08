<?php

function rj_str_replace( $from, $to, $in_text ) {

    $out_text = '';


    for( $i=0; $i<=strlen($in_text)-1 ; $i++ ) {
      if ( $in_text[$i] ==  $from ) {
          $out_text .= $to;
      }else{
          $out_text .= $in_text[$i];        
      }
    }

    return $out_text;
}

echo rj_str_replace( 'm', 'n', 'Ala ma kota' );
