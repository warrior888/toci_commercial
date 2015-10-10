<?php
//OwnCount($arrayName) => count($arrayName), for

$tablica = array (1,2,3,4,5,6,7,8,9,10);

function OwnCount($arrayName) 

for ($i = 0; $i <= 9; $i++) //jednak co zrobić, by ostatni element tablicy był warunkiem zamknięcia pętli. Tutaj jest to element 9, jednak tablica mogła by się zmienić i wtedy ten warunek jest do bani. Istnieje wszakże systemowa funkcja count($arr);
	{
	echo $arr[$i]."\n";
	}
	
echo OwnCount($tablica);