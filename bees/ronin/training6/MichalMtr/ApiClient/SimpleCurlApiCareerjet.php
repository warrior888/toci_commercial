<?php
// -------------------------------------------------------------------------
// Programming Course:
// PHP Basics (bees), by Bartlomiej Zapart (TOCI), September 2016.
// Homework after Training 6 session, dated 2016.02.16.
// Author:	MichalMtr (mtr180deg)
// -------------------------------------------------------------------------

// -------------------------------------------------------------------------
// Use of curl & simple api client on Careerjet api. 
// -------------------------------------------------------------------------

	
	// Create array of countries and country language codes from external file.
	// Picks country language code on the basis of given country name.
	class PickCountryForSearch
	{
		public $fileName = 'countries.txt';
	
		public function CountryList()
		{
			$handle = fopen($this->fileName, 'r');
			$countriesTable = '';
				
			while ($line = fgets($handle))
			{
				$line = trim($line);
				$lineExploded = explode("\t", $line);
				$countriesTable[] = $lineExploded;
			}
			return $countriesTable;
		}
	
		public function PickCountry($chosenCountry) // works
		{
			foreach ($this->CountryList() as $key => $countryInfo)
			{
				if ($countryInfo[2] == $chosenCountry)
				{
					$chosenCountryLanguageCode = $countryInfo[0];
				}
			}
				
			return $chosenCountryLanguageCode;
		}
	}
	
	// Runs curl request on url.
	class ApiClient
	{
		public function RunRequest($requestedUrl)
		{	
			$ch = curl_init($requestedUrl);
						
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
			
			if (! ($urlContent = curl_exec($ch)))
			{
				trigger_error(curl_error($ch));
			}
		
			curl_close($ch);
			
			return $urlContent;
		}
	}
	
	// Parse url content.
	class ApiClientCareerjet extends ApiClient
	{		
		public function Search($chosenCountry, array $searchCriteria)
		{
			$country = new PickCountryForSearch();
			$countryCode = $country->PickCountry($chosenCountry);
			
			$url = 'http://public.api.careerjet.net/search?locale_code='.$countryCode;
			var_dump($url);
			
			foreach ($searchCriteria as $key => $value)
			{
				$url .= '&'.$key.'='.urlencode($value);
			}
			var_dump($url);
			
			$urlContent = $this->RunRequest($url);
			
			$niceContent = json_decode($urlContent);
			
			return $niceContent;
		}
	}
	
	// Call
	$chosenCountry = 'Poland';
	$searchCriteria = array(
					   'keywords' => 'php',
					   'location' => 'Warszawa'
					  );
	
	$searchResult = new ApiClientCareerjet();
	$screen = $searchResult->Search($chosenCountry, $searchCriteria);
	print_r($screen);
					  
	
	
	
	
	
	
	
	
	