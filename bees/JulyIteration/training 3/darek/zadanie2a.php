<?php

require_once 'spacja.php';
require_once 'Zmiana.php';

function strzal($numerKonta) 
{
	return	spacja(Zamiana($numerKonta));
}

echo strzal ('123456789');