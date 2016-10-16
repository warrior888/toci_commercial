<?php

	if (!isset($_SERVER['HTTP_USER_AGENT']))
	{
		echo 'nie korzystasz z przegladarki !! spadaj !';
	}
	else 
	{
		var_dump($_SERVER);
		
		if (stristr($_SERVER['HTTP_USER_AGENT'], 'mozilla'))
		{
			echo 'Twoja przegladarka to mozilla';
		}
	}
	