<?php

	// -----------------------------------------------------------------------------------
	// Programming Course: PHP Basics (bees), by Bartłomiej Zapart (TOCI), September 2016.
	// Homework after Training 3 session, dated 2016.09.25. Part 2 of 3.
	// Author:	MichalMtr (mtr180deg)
	// -----------------------------------------------------------------------------------

	// -----------------------------------------------------------------------------------
	// PESEL validation. Retrieve birth date, gender, verify check sum.
	// PESEL design: 440514|0145|8; [0-5] - date, [6-8] - sn, [9] - gender, [10] - check sum
	// -----------------------------------------------------------------------------------

	$peselCandidate = '94060117118'; //94060117118, 44051401458, 16251003790, 44051404351458, 940da117118, 4351458, sdf56568-
	
	echo ValidatePesel($peselCandidate);
	
	// PESEL validation main function
	function ValidatePesel($peselCandidate)
	{			
		if (strlen($peselCandidate) == 11 && is_numeric($peselCandidate) && ValidateCheckSum($peselCandidate) == 1) // the order is important!
		{
			return "\nPESEL is valid." .
				   "\nGender: " . ValidateGender($peselCandidate[9]) .
				   "\nBirth Date: " . ValidateDate(substr($peselCandidate, 0, 2), substr($peselCandidate, 2, 2), substr($peselCandidate, 4, 2));
		}
		else 
		{
			return "\nPESEL is NOT valid.\n";
		}
	} //end ValidatePesel();
	
	
	// Date validation.
	function ValidateDate($year, $month, $day)
	{		
		// 'month representation in PESEL No' => [0-1] - first two digits of year, [3-4] - real month
		$monthsCoding = array('81' => '18-01', '01' => '19-01', '21' => '20-01', '41' => '21-01', '61' => '22-01',  
							  '82' => '18-02', '02' => '19-02', '22' => '20-02', '42' => '21-02', '62' => '22-02',
							  '83' => '18-03', '03' => '19-03', '23' => '20-03', '43' => '21-03', '63' => '22-03',
							  '84' => '18-04', '04' => '19-04', '24' => '20-04', '44' => '21-04', '64' => '22-04',
							  '85' => '18-05', '05' => '19-05', '25' => '20-05', '45' => '21-05', '65' => '22-05',
							  '86' => '18-06', '06' => '19-06', '26' => '20-06', '46' => '21-06', '66' => '22-06',
							  '87' => '18-07', '07' => '19-07', '27' => '20-07', '47' => '21-07', '67' => '22-07',
							  '88' => '18-08', '08' => '19-08', '28' => '20-08', '48' => '21-08', '68' => '22-08',
							  '89' => '18-09', '09' => '19-09', '29' => '20-09', '49' => '21-09', '69' => '22-09',
							  '90' => '18-10', '10' => '19-10', '30' => '20-10', '50' => '21-10', '70' => '22-10',
							  '91' => '18-11', '11' => '19-11', '31' => '20-11', '51' => '21-11', '71' => '22-11',
							  '92' => '18-12', '12' => '19-12', '32' => '20-12', '52' => '21-12', '72' => '22-12',
							  );
		if (isset($monthsCoding[$month]))
		{
			return $birthDate = substr($monthsCoding[$month], 0, 2) . $year . '-' . 
								substr($monthsCoding[$month], 3, 2) . '-' . 
								$day . "\n";
		}
		else
		{
			return 'NOT valid Birth Date';
		}		
	} //end ValidateDate();
	
	
	/// Gender check.
	function ValidateGender($gender)
	{
		if ($gender % 2 == 0)
		{
			return 'Woman';   // 0, 2, 4, 6, 8
		}
		else
		{
			return 'Man'; 	  // 1, 3, 5, 7, 9
		}
	}// end ValidateGender();
	
	
	// Check sum validation (entire pesel validation).
	function ValidateCheckSum($peselCandidate)
	{
		$scales = array(1,3,7,9,1,3,7,9,1,3,1);  // table of scales
		$control = 0;
		
		foreach ($scales as $key => $scale)
		{
			$control += $peselCandidate[$key] * $scale;
		}
		
		if ($control % 10 == 0)
		{
			return 1;
		} 
		else 
		{
			return -1;
		}
	}// end ValidateCheckSum();
	// ----------------------------------------------------------------------------