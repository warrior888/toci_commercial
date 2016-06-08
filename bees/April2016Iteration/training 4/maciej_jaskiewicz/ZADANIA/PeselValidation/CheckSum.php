<?php

class CheckSum {
	
	protected function getCheckSum($pesel) {
		$check_sum = $pesel[0]*9 + $pesel[1]*7
					 +$pesel[2]*3 + $pesel[3]*1
					 +$pesel[4]*9 + $pesel[5]*7
					 +$pesel[6]*3 + $pesel[7]*1
					 +$pesel[8]*9 + $pesel[9]*7;
		return $check_sum;
	}

	public function checkSumIsValid($pesel) {
		return MJ_STRING::substr((string)$this->getCheckSum($pesel), -1) == MJ_STRING::substr($pesel, -1);
	}
}