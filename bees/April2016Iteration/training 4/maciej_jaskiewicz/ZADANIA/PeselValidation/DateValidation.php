<?php

class DateValidaton {
	
	protected $Months = array(
		1 => array('name' => 'styczen', 'days' => 31),
		2 => array('name' => 'luty', 'days' => array('noLeap' => 28, 'leap' => 29)),
		3 => array('name' => 'marzec', 'days' => 31),
		4 => array('name' => 'kwiecien', 'days' => 30),
		5 => array('name' => 'maj', 'days' => 31),
		6 => array('name' => 'czerwiec', 'days' => 30),
		7 => array('name' => 'lipiec', 'days' => 31),
		8 => array('name' => 'sierpien', 'days' => 30),
		9 => array('name' => 'wrzesien', 'days' => 31),
		10 => array('name' => 'pazdziernik', 'days' => 30),
		11 => array('name' => 'listopad', 'days' => 31),
		12 => array('name' => 'grudzien', 'days' => 30),
	);
	
	protected function isLeapYear($year) {
		if( ($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0) ) {
			return true;
		}
		return false;
	}
	
	protected function monthValid($month) {
		return $month >= 1 && $month <= 12;
	}
	
	protected function dayValid($year, $month, $day) {
		if($this->Months[$month]['name'] == 'luty' && $this->isLeapYear($year)) {
			return $day >= 1 && $day <= $this->Months[$month]['days']['leap'];
		} else if($this->Months[$month]['name'] == 'luty') {
			return $day >= 1 && $day <= $this->Months[$month]['days']['noLeap'];
		} else {
			return $day >= 1 && $day <= $this->Months[$month]['days'];
		}
	}
	
	public function dateIsValid($year, $month, $day) {
		return $this->monthValid($month) && $this->dayValid($year, $month, $day);
	}
}
