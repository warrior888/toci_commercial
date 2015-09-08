<?php

function Fibonacci($liczba)
{
	if ($liczba == 0)
	{
	return 0;
	}
	elseif ($liczba==1)
	{
	return 1;
	}

	else
	{
	return Fibonacci($liczba -1) + Fibonacci($liczba-2);
	}
}

echo Fibonacci(10)."\n";

