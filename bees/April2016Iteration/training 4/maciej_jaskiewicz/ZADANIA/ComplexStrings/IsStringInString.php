<?php

class IsStringInString {
	
	protected function findStringInString($subject, $seek) {
		for($i=0; $i<MJ_STRING::strlen($subject); $i++) {
			if(MJ_STRING::substr($subject, $i, MJ_STRING::strlen($seek)) == $seek) {
				return true;
			}
		}
		return false;
	}
	
	public function checkStringInString($subject, $seek) {
		return $this->findStringInString($subject, $seek);
	}
	
}