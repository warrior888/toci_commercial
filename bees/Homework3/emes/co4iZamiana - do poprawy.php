<?php

function ZamianaIspacja ($numerKonta)
{
	for ($i = 0; $i < strlen($numerKonta); $i+=2)
	{
		
		echo $numerKonta[$i + 1] . $numerKonta[$i];
		if (($i+2) % 4 == 0)
		{
			echo ' ';
		}
	}
}

ZamianaIspacja('478230572806473268347683766756578505');