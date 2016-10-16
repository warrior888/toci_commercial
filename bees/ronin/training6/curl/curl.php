<?php

	class Client
	{
		public function DoRequest($requestUrl)
		{
			$ch = curl_init($requestUrl);
			//var_dump($ch);
			
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_HTTPHEADER, array('User-agent: mozilla'));
			
			$content = curl_exec($ch);
			curl_close($ch);
			
			return $content;
		}
	}
	
	class ApiGaduGaduClient extends Client
	{
		public function SearchByName($name)
		{
			$url = 'http://api.gadu-gadu.pl/users.json?name=' . $name;
			
			$content = $this->DoRequest($url);
			$array = json_decode($content);
			
			return $array;
		}
	}
	
	$client = new ApiGaduGaduClient();
	var_dump($client->DoRequest('localhost:8877'));
	//$client->DoRequest('http://api.gadu-gadu.pl/users.json?name=bartek');
	
	var_dump($client->SearchByName($argv[1]));
	
	