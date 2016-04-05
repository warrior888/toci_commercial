<!doctype html>
<html lang="pl">
<head>
	<meta charset="UTF-8" />
	<title>Spotkanie 2</title>
</head>
<body>
<?php

	echo "\n";
	echo 'To działa' . "<br>";
	echo "\n";
	
	//zmienne
	$wiek = 101;
	$nazwa = 'treść';
	$limitWiekuDoroslosci = 18;
	
	//operatory
	
	
	//instrukcja warunkowa
	if ($wiek >= $limitWiekuDoroslosci) 
	{
		echo 'Osoba jest dorosła' . "<br>";
	}
	else 
	{
		echo 'Osoba nie jest dorosla' . "<br>";
	}
	
	
	
	if ($wiek > 6 && $wiek <= 12)
	{
		echo 'podstawówka' . "\n";
	}
	
	
	if ($wiek > 12 && $wiek <= 15)
	{
		echo 'gimbaza' . "\n";
	}
	
	
	if ($wiek > 15 && $wiek <= 18) {
		echo 'średniak' . "\n";
	}

	
	if ($wiek > 18 && $wiek <= 100)
	{
		echo 'dorosły' . "\n";
	}


	if ($wiek > 100)
	{
		echo 'Jaki cudem ty jeszcze człowieku żyjesz ;)';
	}
	//pętla
?>
</body>
</html>
