<?php
	$limitWieku = 18;
	$wiek = 15;
	
	if($wiek < $limitWieku)
		echo "DOROSLY";
	else
		echo "MALOLAT";
	echo "/n";
	
	if ($wiek < $limitWieku && $wiek >= 12)
		echo "GIMBAZA";
	elseif ($wiek >= $limitWieku && $wiek <=26)
		echo "STUDENCIK";
	elseif ($wiek >26)
		echo "STARY BARAN";
	
?>