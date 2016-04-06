<?php

function rj_strrev( $in_text ) {

    $out_text = '';

    for( $i=strlen($in_text)-1; $i>=0 ; $i-- ) {
      $out_text .= $in_text[$i];
    }

    return $out_text;
}

echo rj_strrev( 'tekst' );
