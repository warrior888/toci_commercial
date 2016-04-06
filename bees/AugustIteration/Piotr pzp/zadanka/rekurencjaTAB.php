<?php


	$contactPhone = array( 
						'ContactGrup' =>
										array(
											'Family' => 
													array( 
														'Mother'  =>'525856244',
														'Father' => '775285645',
														'Brother' =>'652888412',
														'Sister' =>'661622702'),
														
											'BestFriends' =>
													array(
														'Monika'  =>'666999609',
														'Bartek' => '775854755',
														'Mikołaj' =>'654788412',
														'Beata' =>'602558731'),
														
											'Another' =>
													array(
														'Stylist'  =>'847254862',
														'Dentist' => '502300250',
														'Mechanic' =>'515602302',
														
														'Job' =>
															array(
																'Boss' => '606528225'))));


	function Contact($key, $contactPhone)
	{
			
			foreach ($contactPhone as $access => $number) 
			{
				if ($access == $key) 
				{
					return $number;
				}
				 else if (is_array($number)) 
				{
					$result = Contact($key, $number);
					if ($result != false) 
					{
						return $result;
					}
				}
			}	
			return false;
		}
		
		 echo Contact ('Boss', $contactPhone);
		
		/*$test = Contact('Boss', $contactPhone);
 
		if($test)
		{
			echo " To finding contact: ".$test ;
		}
		else 
		{ 
			echo "Not found contact";
		}
		*/

?>