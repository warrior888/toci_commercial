<?php

require_once 'CheckSum.php';
require_once 'GetDate.php';
require_once 'DateValidation.php';

class PeselValidation {
	
	private $helperObjects = array();
	
	public function __construct() {
		$this->helperObjects['dateValidator'] = new DateValidaton();
		$this->helperObjects['dateFromPesel'] = new GetDate();
		$this->helperObjects['checkSum'] = new CheckSum();
	}
	
	protected function DateValidation($year, $month, $day) {
		return $this->helperObjects['dateValidator']->dateIsValid($year, $month, $day);
	}
	
	protected function CutOffDate($pesel) {
		return $this->helperObjects['dateFromPesel']->getDateArray($pesel);
	}
	
	protected function CheckSum($pesel) {
		return $this->helperObjects['checkSum']->checkSumIsValid($pesel);
	}
	
	public function ValidatePesel($pesel) {
		$date = $this->CutOffDate($pesel);
		return $this->DateValidation($date['year'], $date['month'], $date['day']) && $this->CheckSum($pesel);
	}
	
}