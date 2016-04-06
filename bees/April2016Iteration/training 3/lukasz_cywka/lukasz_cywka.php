<?php
function lc_strrev($nazwa)
{
    $dlugosc = strlen($nazwa);
    for($i=$nazwa-1;$i >=0;$i--)
    {
        $nazwa1 .= $nazwa[$i];
    }
    return $nazwa1;
}

echo lc_strrev('text');
?>
