<?php
    $ocena = 6;
	
	
	if ($ocena <= 0 || $ocena >= 7)
	{
		echo "cos poszlo nie tak!";
	}
	if ($ocena == 1)
	{
		echo 'Jeden';
	}
	
	if ($ocena == 2)
	{
		echo 'Dwa';
	}
	
	if ($ocena == 3)
	{
		echo 'Trzy';
	}
	
	if ($ocena == 4)
	{
		echo 'Cztery';
	}
	
	if ($ocena == 5)
	{
		echo 'Pięć';
	}
	
	if ($ocena == 6)
	{
		echo 'CELUJACY!';
	}
  
 		 echo "\n\n";
	
	$test = 'Igor lamal rogI'; // :D


	$liczbaliter = strlen($test);
	
		echo $liczbaliter;
		echo "\n\n";
		
	for ($liczbaliter; $liczbaliter>=0; $liczbaliter--)
	{
		echo $test[$liczbaliter];
		echo "\n";
	}
	
	
	$tab = array('klucz' => 'wartosc', 'kwiatek' => 'roza'); // Asocjacyjna tablica
	
	//$tab[$]
	
	//$tab2 = array()
	
	//$tab['kwiatek']
	

	
?>