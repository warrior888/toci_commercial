<?php

	class ValidationDate
	{
		private $numberDaysMonth = array(
				1 => 31,
				2 => array(28,29),
				3 => 31,
				4 => 30,
				5 => 31,
				6 => 30,
				7 => 31,
				8 => 31,
				9 => 30,
				10 => 31,
				11 => 30,
				12 => 31,
		);
		
		public function checkDate(array $date) 
		{
			return $this->checkYear($date) && $this->checkDays($date);
		}
		
		protected function checkDays($date)
		{
			$checkMonth = $this->checkMonth($date);
			$days = (int)$date["days"];
			
			if($this->checkMonth($date))
			{
				if($date["month"] == 2)
				{
					$checkLeapYear = $this->checkLeapYear($date);
					
					if($days > 0 && $days <= $this->numberDaysMonth[2][$checkLeapYear])
					{
						return true;
					}
					else 
					{
						return false;
					}
				}
				else if($days > 0 && $days <= $this->numberDaysMonth[$date["month"]])
				{
					return true;
				}
			}
			else
			{
				return false;
			}
		}
		
		protected function checkMonth($date)
		{
			return isset($this->numberDaysMonth[$date["month"]]);
		}
		
		protected function checkLeapYear($date)
		{
			$year = (int)$date["year"];
			
			if(($year % 4 == 0 && $year % 100 > 0) || $year % 400 == 0)
			{
				return 1;
			}
			else 
			{
				return 0;
			}
		}
		
		protected function checkYear($date)
		{
			return (int)$date['year'] > 0;
		}
	}