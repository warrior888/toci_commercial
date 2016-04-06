<?php 

$wiek = 19;

if($wiek>=6 && $wiek<12)
{
	echo 'podstawowka';
}
else if($wiek >= 16 && $wiek < 19) 
{
	echo 'srednia';
} 
else if($wiek >= 19 && $wiek < 24) 
{
	echo 'studia';
} 
else 
{
	echo 'rodzina';
}
?>