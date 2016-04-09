<?php

require_once 'CheckSum.php';
require_once 'GetDate.php';
require_once 'DateValidation.php';

class PeselValidation {
	
	protected function DateValidation($year, $month, $day) {
		$dateValidator = new DateValidaton($year, $month, $day);
		return $dateValidator->dateIsValid();
	}
	
	protected function CutOffDate($pesel) {
		$dateFromPesel = new GetDate($pesel);
		return $dateFromPesel->getDateArray();
	}
	
	protected function CheckSum($pesel) {
		$checkSum = new CheckSum($pesel);
		return $checkSum->checkSumIsValid();
	}
	
	public function ValidatePesel($pesel) {
		$date = $this->CutOffDate($pesel);
		return $this->DateValidation($date['year'], $date['month'], $date['day']) && $this->CheckSum($pesel);
	}
	
}