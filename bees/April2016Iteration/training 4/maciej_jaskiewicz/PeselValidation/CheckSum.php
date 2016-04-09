<?php

class CheckSum {
	
	protected $pesel;
	
	function __construct($pesel) {
		$this->pesel = $pesel;
	}
	
	protected function getCheckSum() {
		$check_sum = $this->pesel[0]*9 + $this->pesel[1]*7
					+$this->pesel[2]*3 + $this->pesel[3]*1
					+$this->pesel[4]*9 + $this->pesel[5]*7
					+$this->pesel[6]*3 + $this->pesel[7]*1
					+$this->pesel[8]*9 + $this->pesel[9]*7;
		return $check_sum;
	}

	public function checkSumIsValid() {
		return MJ_STRING::substr((string)$this->getCheckSum(), -1) == MJ_STRING::substr($this->pesel, -1);
	}
}