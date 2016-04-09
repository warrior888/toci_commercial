<?php

class GetDate {
	
	protected function formatDate($str) {
		if($str[0] == 0 || $str[0] == 2 ) {
			return $str[1];
		} else if($str[0] == 3) {
			$str[0] = 1;
		}
		return $str;
	}
	
	protected function getYear($pesel) {
		$yearPref = MJ_STRING::substr($pesel, 2, 1);
		if($yearPref == 0 || $yearPref == 1) {
			return '19'.MJ_STRING::substr($pesel, 0, 2);
		} else if($yearPref == 2 || $yearPref == 3) {
			return '20'.MJ_STRING::substr($pesel, 0, 2);
		}
	}
	protected function getMonth($pesel) {		
		return $this->formatDate(MJ_STRING::substr($pesel, 2, 2));
	}
	
	protected function getDay($pesel) {
		return $this->formatDate(MJ_STRING::substr($pesel, 4, 2));
	}
	
	public function getDateArray($pesel) {
		return array('day' => $this->getDay($pesel), 
					 'month' => $this->getMonth($pesel), 
					 'year' => $this->getYear($pesel));
	}
}