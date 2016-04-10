<?php

class ComplexStrings {
	
	private $helperObjects = array();
	
	public function __construct() {
		$this->helperObjects['IsStringInString'] = new IsStringInString();
		$this->helperObjects['IsStringLettersInString'] = new IsStringLettersInString();
	}
	
	protected function IsStringInString($subject, $seek) {
		return $this->helperObjects['IsStringInString']->checkStringInString($subject, $seek);
	}
	
	protected function IsStringLettersInString($subject, $seek) {
		return $this->helperObjects['IsStringLettersInString']->checkLettersInString($subject, $seek);
	}

	protected function IsAnagram($subject, $seek) {
		return MJ_STRING::sort($subject) == MJ_STRING::sort($seek);
	}
	
	protected function generateOutputsArray($subject, $seek) {
		$methodOutputs = array(
				'testForStringInString' => $this->IsStringInString($subject, $seek),
				'testForStringLettersInString' => $this->IsStringLettersInString($subject, $seek),
				'testForAnagram' => $this->IsAnagram($subject, $seek),
		);
		return $methodOutputs;
	}
	
	public function CheckStrings($subject, $seek) {
		return $this->generateOutputsArray($subject, $seek);
	}
}