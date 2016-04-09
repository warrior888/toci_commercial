<?php

class DateValidaton {
	
	protected $day;
	protected $month;
	protected $year;
	
	protected $Months = array(
		1 => array('name' => 'styczen', 'days' => 31),
		2 => array('name' => 'luty', 'days' => array(28, 29)),
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
	
	function __construct($year, $month, $day) {
		$this->day = $day;
		$this->month = $month;
		$this->year = $year;
	}
	
	protected function isLeapYear() {
		if( ($this->year % 4 == 0 && $this->year % 100 != 0) || ($this->year % 400 == 0) ) {
			return true;
		}
		return false;
	}
	
	protected function monthValid() {
		return $this->month >= 1 && $this->month <= 12;
	}
	
	protected function dayValid() {
		if($this->Months[$this->month]['name'] == 'luty' && $this->isLeapYear($this->year)) {
			return $this->day >= 1 && $this->day <= $this->Months[$this->month]['days'][1];
		} else if($this->Months[$this->month]['name'] == 'luty') {
			return $this->day >= 1 && $this->day <= $this->Months[$this->month]['days'][0];
		} else {
			return $this->day >= 1 && $this->day <= $this->Months[$this->month]['days'];
		}
	}
	
	public function dateIsValid() {
		return $this->monthValid() && $this->dayValid();
	}
}
