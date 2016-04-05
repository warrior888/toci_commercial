<?php

$wiek = 23;

if($wiek > 6 && $wiek < 12) {
	echo 'podstawowka';
} else if($wiek >= 12 && $wiek < 16) {
	echo 'gimbaza';
} else if($wiek >= 16 && $wiek < 19) {
	echo 'ponadgimnazjalna';
} else if($wiek >= 19 && $wiek < 24) {
	echo 'studia';
} else {
	echo 'wolnosc!';
}