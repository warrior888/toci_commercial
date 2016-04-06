	<?php

function reverse($y)
{
$length = strlen($y);

for($i=$length-1;$i >=0;$i--){
    echo $y[$i];
}
}
reverse("alaaaa");
?>

